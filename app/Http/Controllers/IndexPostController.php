<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexPostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $posts = Post::with('tags')
            ->latest()
            ->get();

        return view('posts.index', ['posts' => $posts]);
    }
}
