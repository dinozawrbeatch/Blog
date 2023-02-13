<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = Comment::orderBy('status', 'ASC')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.comments.index', compact('comments'));
    }
}
