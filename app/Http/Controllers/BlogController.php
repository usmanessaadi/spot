<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;

class BlogController extends Controller
{

    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);
        $last_posts = WinkPost::orderBy('publish_date', 'desc')->limit(5)->get();
        $tags = WinkTag::all();
        return view('blog.index', [
            'posts' => $posts,
            'last_posts' => $last_posts,
            'tags' => $tags
        ]);
    }



    public function show($slug)
    {
        $post = WinkPost::where('slug', $slug)->first();
        $related = WinkPost::whereHas('tags', function ($q) use ($post) {
            return $q->whereIn('name', $post->tags->pluck('name'));
        })->where('id', '!=', $post->id)->take(2)->get();

        return view('blog.single', [
            'post' => $post,
            'related_posts' => $related,
            'title' => $post->title,
            'meta_description' => $post->meta['meta_description']
        ]);
    }

    public function search()
    {
        $posts = WinkPost::where('title', 'like', '%' . request('query') . '%')->get();
        $last_posts = WinkPost::orderBy('publish_date', 'desc')->limit(5)->get();
        $tags = WinkTag::all();
        return view('blog.index')->with('posts', $posts)
            ->with('title', 'Search results : ' . request('query'))
            ->with('query', request('query'))
            ->with('last_posts', $last_posts)
            ->with('tags', $tags);
    }
    public function searchByTag(WinkTag $tag)
    {
        $posts = $tag->posts;
        $last_posts = WinkPost::orderBy('publish_date', 'desc')->limit(5)->get();
        $tags = WinkTag::all();
        return view('blog.index')->with('posts', $posts)
            ->with('title', 'Topics Related To " ' . $tag->name . ' "')
            ->with('tag', $tag->name)
            ->with('last_posts', $last_posts)
            ->with('tags', $tags);
    }
}
