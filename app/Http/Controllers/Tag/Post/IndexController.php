<?php

namespace App\Http\Controllers\Tag\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $posts = $tag->posts()->paginate(10);
        return view('tags.posts.index', compact('posts'));
    }
}
