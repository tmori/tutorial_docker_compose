<?php

namespace App\Http\Controllers\HakoTweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\HakoTweet\CreateRequest;
use App\Models\Tweet;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $tweet = new Tweet;
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('tweet.index');
    }
}
