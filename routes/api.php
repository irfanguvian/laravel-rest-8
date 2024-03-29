<?php

use App\Models\Post;
use App\Http\Controllers\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostApiController::class, "index"]);
Route::get('/posts/{post}', [PostApiController::class, "postsById"]);
Route::post('/posts', [PostApiController::class, "addNewPost"]);
Route::put('/posts/{post}', [PostApiController::class, "updatePost"]);
Route::delete('/posts/{post}', [PostApiController::class, "deletePost"]);

// Route::get("/posts", function () {
//     return Post::all();
// });

// Route::post('/posts', function () {
//     request()->validate([
//             "title" => "required",
//             "content" => "required"
//         ]);

//     return Post::create([
//         "title" => request("title"),
//         "content" => request("content")
//     ]);
// });

// Route::put('/posts/{post}', function (Post $post) {
//     request()->validate([
//             "title" => "required",
//             "content" => "required"
//         ]);

//     $post->update([
//         "title" => request("title"),
//         "content" => request("content"),
//     ]);
    
//     return $post;
// });

// Route::delete("/posts/{post}", function(Post $post) {
//     $post->delete();

//     return $post;
// });