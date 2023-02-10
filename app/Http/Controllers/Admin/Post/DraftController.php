<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class DraftController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::where('status', Post::STATUS_DRAFT)->get();
        return view('admin.posts.draft', compact('posts'));
    }
}
