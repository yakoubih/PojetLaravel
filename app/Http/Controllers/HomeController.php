<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
      $posts = \App\Post::take(3)->skip(7)->get();
      return view('welcome',array('posts' => $posts));

}
}
