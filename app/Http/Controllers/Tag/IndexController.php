<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::paginate(10);
        return view('tags.index', compact('tags'));
    }
}
