<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{
    public function index() {
        $category = Category::find(1);
        $post = Post::find(6);
        $tag = Tag::find(1);
        dd($tag->posts);
        //return view('post.index', compact('posts'));
    }

    public function create() {
        return view('post.create');
    }

    public function store(){
        $data = \request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }


    public function update(Post $post)
    {
        $data = \request()->validate([
            'title'=>'string',
            'content'=>'string',
            'image'=>'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    // public function delete()
    // {
    //     $post = Post::find(2);
    //     $post->delete();
    //     dd('finish');
    // }

    public function delete(Post $post){
        $post->delete();
        return redirect()->route('post.index');
    }
    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate()
    {
        // $post = Post::find(1);
        $anotherPost = [
            'title' => 'updated title ',
            'content' => 'updated content ',
            'image' => 'updated image.jpg',
            'likes' => 5555,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([ 
            'title' => 'updated title'
        ],[
            'title' => 'updated title',
            'content' => 'updated content',
            'image' => 'updated image.jpg',
            'likes' => 5555,
            'is_published' => 1,
        ]);
        dump($post->likes);
        dd('finished');
    }


    public function updateOrCreate(){
        $anotherPost = [
            'title' => 'updated or create title ',
            'content' => 'updated or create content ',
            'image' => 'updated image.jpg',
            'likes' => 5551215,
            'is_published' => 0,
        ];

        $post = Post::updateOrCreate([
            'title' => 'somecretatatatat'
        ],[
        'title' => 'updated or create title ',
        'content' => 'updated or create content ',
        'image' => 'updated image.jpg',
        'likes' => 5551215,
        'is_published' => 0,
        ]);
    }
}