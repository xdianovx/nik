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
        $posts = Post::withTrashed()->get();
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

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);


        $post->update([
            'title' => $request->title,
            'description' =>  $request->description,
            'text' =>  $request->text,
        ]);
        $post->save();
        Session::flash('message', "Успешно отредактировано");
        return Redirect::back();
    }



    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();
        Session::flash('message', "Успешно удален");
        return Redirect::route('post.index');
    }

    public function restore($id)
    {
        $post = Post::withTrashed($id);

        $post->restore();

        return Redirect::back();
    }
}
