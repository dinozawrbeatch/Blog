<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class PublishedController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::where('status', Post::STATUS_PUBLISHED)->get();
        return view('admin.posts.published', compact('posts'));
    }
}
