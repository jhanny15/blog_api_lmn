<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showAllPosts()
    {
        return response()->json(Post::all());
    }

    public function showOnePost($id)
    {
        return response()->json(Post::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'post_title' => 'required',
            'post_text' => 'required',
            'author_id' => 'required',
        ]);

        $Post = Post::create($request->all());

        return response()->json($Post, 201);
    }

    public function update($id, Request $request)
    {
        $Post = Post::findOrFail($id);
        $Post->update($request->all());

        return response()->json($Post, 200);
    }

    public function delete($id)
    {
        Post::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function showPostTitle()
    {
        foreach (Post::all() as $post){
            echo  $post->post_title. "<br />";
        }
    }
}