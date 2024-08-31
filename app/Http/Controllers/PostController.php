<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'title'=> 'Blog', 'posts'=>Post::with(['author','category'])->latest()->paginate(30),]);
    }
    public function show(Post $post): View
    {
        return view('posts.detail',['judul'=>'Article Detail','post'=> $post]);
    }
    public function postauthor(User $user): View
    {  
      //  $posts = $user->$posts()->paginate(20);
        return view('posts.author',['title'=>'Article By '. $user->name, 'posts'=> $user]);
    }
}