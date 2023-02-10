<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class ArchivedController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::where('status', Post::STATUS_ARCHIVED)->get();
        return view('admin.posts.archived', compact('posts'));
    }
}
