<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

// class Post extends Model
// {
//     //
// }

class Post 
{
    public static function all() {
        return [
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
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), function($post) use ($slug) {
            return $post['slug'] == $slug;
        });
    }
}