<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexTagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $tags = Tag::with('posts', 'videos')
            ->get();

        return view('tags.index', ['tags' => $tags]);
    }
}
