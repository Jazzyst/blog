<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Post;
use App\Video;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function store(Post $post)
    {
        $this->validate(request(),[
            'body'=> 'required',
        ]);
        Comments::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'body' => request('body'),
        ]);
        return back();
    }

    public function video_store(Video $video)
    {
        $this->validate(request(),[
            'body'=> 'required',
        ]);
        Comments::create([
            'user_id' => auth()->user()->id,
            'video_id' => $video->id,
            'body' => request('body'),
        ]);
        return back();
    }
}
