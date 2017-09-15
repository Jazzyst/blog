<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comments;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at')->where('category_id','=','1');
        $cat = Category::withCount('posts')->get();
        return view('post.index',[
            'posts' => $posts,
            'cat' => $cat
        ]);
    }

    public function show($id)
    {   $post = Post::findOrFail($id);
        $comments = Comments::all()->where('post_id','=',$id);
        return view('post.show',[
            'post' => $post,
            'comments' => $comments,
        ]);
    }

    public function create()
    {
        $category = Category::all();
        return view('post.create', [
            'category' => $category,
         ]);
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title'=> 'required',
            'body'=>'required',
            'category_id' => 'required',
        ]);
        Post::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'user_id' => auth()->user()->id,
            'category_id' => request('category_id'),
        ]);
        return redirect('/posts/');
    }
}
