<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request) {
        $search = request()->get('search');
        $foundPosts = Post::where('title', 'LIKE', "%{$search}%")->get();

        $results = collect();

        $foundPosts->each(function(Post $post) use($results) {
            $results->add([
                'text' => $post->title,
                'url' => route('posts.show', $post)
            ]);
        });

        return $results->toJson();
    }
}
