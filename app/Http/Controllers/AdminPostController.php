<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\AddIdsToHeadingsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class AdminPostController extends Controller
{

    /**
     * @return Response
     */
    public function index()
    {
        return Inertia::render('Posts/Admin/index',[
            'posts' => Post::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Posts/Admin/create-edit', [
            'post' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->lb_content = $data['body'];
        $post->title = $data['title'];
        $post->save();

        return Redirect::route('admin.posts.show', ['post' => $post]);
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
        return Inertia::render('Posts/Admin/show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function edit(Post $post)
    {
        return Inertia::render('Posts/Admin/create-edit', [
            'post' => $post,
            'body' => $post->lb_raw_content,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Post $post
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post, AddIdsToHeadingsService $addIdsToHeadingsService)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $body = $addIdsToHeadingsService->execute($data['body']);

        $post->lb_content = $body;
        $post->title = $data['title'];
        $post->save();

        return Redirect::route('admin.posts.show', ['post' => $post]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Post $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
