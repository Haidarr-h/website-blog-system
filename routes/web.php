<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// ! route
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/blog', function () {
    $posts = Post::with(['author', 'category'])->latest();

    if (request('search')) {
        $posts->where('title', 'like', '%' . request('search') . '%');

    };

    return view('blog', ['title' => 'Blog Page', 'posts' => $posts->paginate(5)]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

// ? single post (per artikelnya)
Route::get('/blog/{post:slug}', function (Post $post) {


    // $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    $post = $user->posts->load('category', 'author');
    return view('blog', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $post]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('blog', ['title' => 'Articles in ' . $category->name, 'posts' => $category->posts]);
});