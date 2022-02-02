<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'text' =>  $request->text,
        ]);

        $post->save();
        Session::flash('message', "Успешно добавлено");
        return Redirect::back();
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }


    public function update()
    {
        return ('Обновить пост');
    }



    public function destroy()
    {
        return ('Удалить пост');
    }
}
