<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexVideoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        $videos = Video::with('tags')
            ->get();

        return view('videos.index', ['videos' => $videos]);
    }
}
