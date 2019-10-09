<?php

namespace App\Jobs;

use App\Jobs\Supports\Crawler;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FictionCrawling implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $url;
    public $fictionName;

    /**
     * Create a new job instance.
     *
     * @param $url
     * @param $fictionName
     */
    public function __construct(string $url, string $fictionName)
    {
        $this->url = $url;
        $this->fictionName = $fictionName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $crawler = new Crawler();
        try {
            $result = $crawler->analyzeDocument($this->url);
            Storage::disk()->put('result', $result);
        } catch (\Exception $exception) {
            Storage::disk()->put('exception', $exception);
        }

        try {
            Storage::disk()->put('fictions/' . $this->fictionName . '.txt', file_get_contents($crawler->fiction));
            unlink($crawler->fiction);
        } catch (\Exception $e) {
            Storage::disk()->put('exception', $e);
        }
    }
}
