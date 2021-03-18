<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\EstimatedReadingTimeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class PostController extends Controller
{

    /**
     * @return Response
     */
    public function index()
    {
        return Inertia::render('Posts/index',[
            'posts' => Post::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(Post $post, EstimatedReadingTimeService $readingTimeService)
    {
        return Inertia::render('Posts/show', [
            'post' => $post,
            'estimatedTime' => $readingTimeService
                ->estimateWithLarabergBody($post->getRenderedContent()),
        ]);
    }
}
