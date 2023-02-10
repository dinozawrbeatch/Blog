<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        $frequency = Post::withCount('tagFrequency')->get();
        return view('admin.tags.index', compact('tags'));
    }
}
