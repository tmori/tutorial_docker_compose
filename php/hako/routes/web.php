<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hako', [\App\Http\Controllers\Hako\IndexController::class, 'show']);

Route::get('hako/{id}', [\App\Http\Controllers\Hako\IndexController::class, 'showId']);

Route::get('tweet', \App\Http\Controllers\HakoTweet\IndexController::class)
->name('tweet.index');

Route::post('tweet/create', \App\Http\Controllers\HakoTweet\CreateController::class)
->name('tweet.create');

Route::get('tweet/update/{tweetId}', \App\Http\Controllers\HakoTweet\Update\IndexController::class)
->name('tweet.update.index')->where('tweetId', '[0-9]+');

Route::put('tweet/update/{tweetId}', \App\Http\Controllers\HakoTweet\Update\PutController::class)
->name('tweet.update.put')->where('tweetId', '[0-9]+');

Route::delete('tweet/delete/{tweetId}', \App\Http\Controllers\HakoTweet\DeleteController::class)
->name('tweet.delete')->where('tweetId', '[0-9]+');
