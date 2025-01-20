<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('post.index', compact('posts'));
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


    public function update()
    {
        $post = Post::find(5);
        
        $post->update([
            'title' => 'updated title 5',
            'content' => 'updated content 5',
            'image' => 'updated image.jpg',
            'likes' => 13,
            'is_published' => 1,
        ]);
        dd('updated');
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('finish');
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