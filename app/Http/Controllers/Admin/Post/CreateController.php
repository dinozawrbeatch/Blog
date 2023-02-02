<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Tag;
use App\Models\User;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('admin.posts.create', compact('tags'));
    }
}
