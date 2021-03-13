<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
    public function show(Post $post)
    {
        $post->getRenderedContent();
        return Inertia::render('Posts/show', [
            'post' => $post
        ]);
    }
}
