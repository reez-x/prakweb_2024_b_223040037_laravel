<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Reez', 'title'=>'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts'=>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Atrikel 1',
            'author' => 'Reez',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nisi delectus rem nam, sunt, debitis libero dolores aperiam perspiciatis fugiat consectetur, excepturi cupiditate esse officiis modi architecto nemo magni deleniti.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Atrikel 2',
            'author' => 'Reez',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nisi delectus rem nam, sunt, debitis libero dolores aperiam perspiciatis fugiat consectetur, excepturi cupiditate esse officiis modi architecto nemo magni deleniti.'
        ]
    ]]);
    
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Atrikel 1',
            'author' => 'Reez',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nisi delectus rem nam, sunt, debitis libero dolores aperiam perspiciatis fugiat consectetur, excepturi cupiditate esse officiis modi architecto nemo magni deleniti.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Atrikel 2',
            'author' => 'Reez',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat nisi delectus rem nam, sunt, debitis libero dolores aperiam perspiciatis fugiat consectetur, excepturi cupiditate esse officiis modi architecto nemo magni deleniti.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});



Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact']);
});