<?php

namespace App\Http\Controllers;

use App\Jobs\FictionCrawling;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class CrawlerController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url',
            'name' => 'required|string',
        ]);

        FictionCrawling::dispatch($request->url, $request->name);
        return redirect('/')->withInput($request->toArray());
    }

    public function show()
    {
        $files = Storage::disk()->files('fictions');
        return view('fictions', ['files' => $files]);
    }
}
