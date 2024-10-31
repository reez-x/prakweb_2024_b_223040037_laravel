<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
}
public static function find($slug): array{
    // return Arr::first(Post::all(), function($post) use ($slug){
    //     return $post['slug'] == $slug;
    // });
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    if(!$post){
        abort(404);
    }
    return $post;
}
};