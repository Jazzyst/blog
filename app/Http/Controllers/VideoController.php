<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::all();
        return view('video.index', [
            'video' => $video,
        ]);
    }
}
