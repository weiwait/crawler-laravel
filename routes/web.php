<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('crawler');
});

Route::post('crawling', [\App\Http\Controllers\CrawlerController::class, 'index']);

Route::get('fictions', [\App\Http\Controllers\CrawlerController::class, 'show']);

Route::get('download/{file}', function ($file) {
    return \Illuminate\Support\Facades\Storage::disk()->download('fictions/' . $file);
});

