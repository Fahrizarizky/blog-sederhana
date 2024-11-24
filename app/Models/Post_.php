<?php

namespace App\Models;

class post
{
    static $blog_posts =  [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fahriza Rizky",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Explicabo quidem eius optio praesentium odit nam. 
            Inventore quaerat totam enim sapiente accusantium. 
            Quaerat quod, inventore mollitia non deleniti porro nihil! 
            Velit?s"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fauziyan Syahputra",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Explicabo quidem eius optio praesentium odit nam. 
            Inventore quaerat totam enim sapiente accusantium. 
            Quaerat quod, inventore mollitia non deleniti porro nihil! 
            Velit?s"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
