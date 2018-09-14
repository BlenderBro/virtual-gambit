<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Show all blog posts
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(6);

        return view('pages.Blog.blog', compact('posts'));
    }

    /**
     * Show single blog item
     * @param slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $latest = DB::table('posts')->orderBy('created_at', 'desc')->paginate(4);
        $categories = DB::table('categories')->get();

        return view('pages.Blog.blog-single', compact('post', 'latest', 'categories'))->with($slug);
    }
}
