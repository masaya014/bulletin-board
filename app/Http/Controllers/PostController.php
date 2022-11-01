<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function index(Post $post)
{
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
}
    
public function show(Post $post , Comment $comment)
{
   
    return view('posts/show')->with(['post' => $post,'comments'=>$post->getByPost()]);
}

public function create()
{
    return view('posts/create');
}

public function store(Request $request, Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}

public function commentstore(Request $request, Comment $comment,Post $post)
{
    $input = $request['comment'];
    $comment->fill($input)->save();
    return redirect('/posts/' . $comment->post_id);
}
}
