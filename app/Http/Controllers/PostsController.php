<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function show($post_name) {
	   $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
	  
	   return view('posts/single',array( //Pass the post to the view
	       'post' => $post
	   ));
	}
}
