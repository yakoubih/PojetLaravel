<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function index() {
    $posts = \App\Post::all();	
    return view('articles',array('post' => $posts));
}

public function show($post_name) {
   $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
   return view('posts_single',array('post' => $post));
}



  public function update(Request $request)
    {
    	$id = $request->input('id');
    	//$author = $request->input('author');
    	$content = $request->input('content');

       	$post = \App\Post::find($id);
		//$post->post_author = $author;
		$post->post_content = $content;

		$post->save();
		
		return redirect()->action('ArticlesController@index');    
	}
}
