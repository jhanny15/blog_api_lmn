<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function showAllComments()
    {
        return response()->json(Comment::all());
    }

    public function showOneComment($id)
    {
        return response()->json(Comment::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'comment_text' => 'required',
            'author_id' => 'required',
            'post_id' => 'required',
        ]);

        $Comment = Comment::create($request->all());

        return response()->json($Comment, 201);
    }

    public function update($id, Request $request)
    {
        $Comment = Comment::findOrFail($id);
        $Comment->update($request->all());

        return response()->json($Comment, 200);
    }

    public function delete($id)
    {
        Comment::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function showPostComments($id){

        foreach(Comment::all() as $comment){


            if($comment->post_id == $id){

                echo "User". $comment->author_id. ": ";
                echo $comment->comment_text. "<br />";
            }
            
        }
    }
}