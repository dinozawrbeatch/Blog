<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::orderBy('created_at', 'DESC')->where('status', Post::STATUS_PUBLISHED)->paginate(10);
        return view('posts.index', compact('posts'));
    }
}
