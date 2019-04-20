<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use\App\Comment;
class CommentController extends Controller
{
    public function store(CommentRequest $request){

		$comment = new Comment;
        $comment->post_id = $request->post_id;
        $comment->comment_name = $request->comment_name;
        $comment->comment_email = $request->comment_email;
        $comment->comment_content = $request->comment_content;
        $comment->contact_date = date('Y-m-d H:i:s');
        //$comment->save();
        return view('contact.confirm');
	}
}
