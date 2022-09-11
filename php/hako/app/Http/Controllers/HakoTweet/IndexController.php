<?php

namespace App\Http\Controllers\HakoTweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //return view('tweet.index')
        //    ->with('name', 'laravel');
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        //dd($tweets);
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}
