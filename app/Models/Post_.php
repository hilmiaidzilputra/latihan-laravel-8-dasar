<?php

namespace App\Models;


class Post
{
    private static $blog_posts  = [
        [
            "judul" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "penulis" => "Hilmi Aidzil Putra",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit veritatis doloribus excepturi ipsa dicta illum porro, aliquid totam numquam. Eligendi incidunt voluptatem aliquid cupiditate ipsum deserunt, necessitatibus ad ullam!"
        ],
        [
            "judul" => "Judul Post Kedua ",
            "slug" => "judul-post-kedua",
            "penulis" => "Asep Firmansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla impedit veritatis doloribus excepturi ipsa dicta illum porro, aliquid totam numquam. Eligendi incidunt voluptatem aliquid cupiditate ipsum deserunt, necessitatibus ad ullam!"

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
