<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use\App\Comment;
class CommentController extends Controller
{
    public function store(Request $request){
        $comment = new \App\Comment;

        $comment->post_id = $request->input('id');

        $comment->comment_name = $request->input('comment_name');
        $comment->comment_email = $request->input('comment_email');
        $comment->comment_content = $request->input('comment_content');
        $comment->comment_date = date('Y-m-d H:i:s');

        $comment->save();

        /*\App\Comment::create([
            'comment_name' => $comment_name,
            'comment_email' =>  $comment_email,
            'comment_content' => $comment_content,
            'pos_id' => $id,
            'comment_date' =>date('Y-m-d H:i:s')
        ]);*/
     
        return redirect()->action('ArticlesController@index');    
	}
}
