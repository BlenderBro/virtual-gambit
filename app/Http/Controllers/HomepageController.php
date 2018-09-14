<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

class HomepageController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);

        return view('pages.homepage', compact('posts'));
    }
}
