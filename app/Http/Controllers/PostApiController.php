<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostApiController extends Controller
{
    //
    public function index() {
        return Post::all();
    }

    public function postsById(Post $post) {
        return $post;
    }

    public function addNewPost() {
        request()->validate([
                        "title" => "required",
                        "content" => "required"
                    ]);
            
        return Post::create([
                    "title" => request("title"),
                    "content" => request("content")
        ]);
    }

    public function updatePost(Post $post) {
        request()->validate([
            "title" => "required",
            "content" => "required"
        ]);
            
        $post->update([
            "title" => request("title"),
            "content" => request("content"),
        ]);
        return $post;
    }

    public function deletePost(Post $post) {
        $post->delete();

         return $post;
    }
}
