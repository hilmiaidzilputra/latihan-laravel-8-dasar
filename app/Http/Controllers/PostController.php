<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \App\Models\Post;
use App\Models\User;
use PharIo\Manifest\Author;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "judul" => "Halaman Blog Utama",
            // "post" => Post::all()
            "post" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About",
            "name" => "Hilmi Aidzil Putra",
            "email" => "hilmiaidzilputra@gmail.com",
            "gambar" => "profile.jpg"
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function listCategory()
    {
        return view('categories', [
            "title" => "List Category",
            "categories" => Category::all()
        ]);
    }

    public function listAuthor()
    {
        return view('authors', [
            "title" => "List Author",
            "authors" => User::all()
        ]);
    }

    public function category(Category $category)
    {
        return view('posts', [
            "title" => $category->name,
            'judul' => "Halaman Blog Category: $category->name",
            "post" => $category->post->load(['category', 'author'])
        ]);
    }

    public function author(User $author)
    {
        return view('posts', [
            'title' => $author->name,
            'judul' => "Halaman Blog Author : $author->name",
            'author' => $author->name,
            'post' => $author->post->load(['author', 'category',])
        ]);
    }
}
