<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tweet;
use App\Comment;

class TweetsController extends Controller
{
    public function saveTweet(Request $request) {
        $user = Auth::user();

        $userId = $user->id;
        $incomingTweet = $request->tweet;

        $tweet = new Tweet();
        $tweet->user_id = $userId;
        $tweet->tweet = $incomingTweet;
        $tweet->save();

        return redirect('/home');
    }

    public function saveComment(Request $request) {
        $user = Auth::user();

        $userId = $user->id;
        $incomingComment = $request->comment;

        $comment = new Comment();
        $comment->user_id = $userId;
        $comment->tweet_id = $request->tweet_id;
        $comment->comment = $incomingComment;
        $comment->save();

        return redirect('/home');
    }

    public function deleteComment($id) {
        $deleteComment = Comment::find($id);
        $deleteComment->delete();
        return redirect('/home');
    }

    public function deleteTweet($id) {
        $deleteTweet = Tweet::find($id);
        $deleteTweet->delete();
        return redirect('/home');
    }

    public Function getTweets(){

        $allTweets = Tweet::all();
        $allTweetsJson = json_encode($allTweets);
        return $allTweetsJson;
    }




}
