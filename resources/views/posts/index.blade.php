@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"  >
        <link rel="stylesheet" href="/css/index.css">
    </head>
     <body>
        <h1 class='blogtitle'>Play with me</h1>
        <div class='create'>
            <a href='/posts/create'>募集の投稿</a>
        </div>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">募集内容:{{ $post->title }}</a>
                    </h2>
                    <p class='name'>ユーザー名:{{ $post->username }}</p>
                    <p class='body'>詳細:{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
         <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>