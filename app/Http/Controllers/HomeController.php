<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Filament\Resources\PostResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HomeController extends Controller
{
    public function index()
    {

        return view('home', ['title' => 'Homepage']);
    }

    // public function show($id)
    // {
    //     $post = Post::findOrFail($id);
    //     // 'images' adalah nama koleksi


    //     return view('home.show', compact('posts', 'imageUrl'));
    // }
}
