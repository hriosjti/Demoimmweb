<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        // $medias = Media::all();
        // dd($media);
        // $imageUrl = $posts->getFirstMediaUrl('thumbnail');
        // dd($posts);
        // $text_html = $posts;

        // $text_html = "<p>Hello, <b>World</b>!</p>";

        // // Membersihkan tag HTML
        // $text_clean = strip_tags($text_html);

        return view('posts', ['title' => 'Blogs'], compact('posts'));
    }


    public function show($slug)
    {
        $posts = Post::get();


        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        // dd($post);
        return view('post', ['title' => 'Singgle Post', 'post' => $post]);
        // return view('posts', ['title' => 'Singgle Post', 'post' => $post], compact('posts'));
    }
}
