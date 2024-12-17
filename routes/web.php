<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home' ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Sandhika Galih']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Sandika Galih',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur corrupti est voluptates libero eligendi ab blanditiis harum aperiam repellendus aliquam ullam, eaque ipsum nobis fugit sed vitae reprehenderit rerum enim?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'M Dzul Fahmi Shoib',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit commodi accusamus, perferendis natus veritatis aliquid non qui laudantium possimus, sequi eum iure doloribus iusto. Officia quidem vel aperiam natus libero!'
        ],
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Sandika Galih',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur corrupti est voluptates libero eligendi ab blanditiis harum aperiam repellendus aliquam ullam, eaque ipsum nobis fugit sed vitae reprehenderit rerum enim?'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'M Dzul Fahmi Shoib',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit commodi accusamus, perferendis natus veritatis aliquid non qui laudantium possimus, sequi eum iure doloribus iusto. Officia quidem vel aperiam natus libero!'
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact' ]);
});
