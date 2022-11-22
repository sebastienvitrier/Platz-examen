<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts.index',['posts' => \App\Models\Post::paginate(12)]);
})->name('post.index');

Route::get('posts/{post}', function (\App\Models\Post $post) {
    return view('postsDetails.index', compact('post'));
})->name('postsDetails.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
