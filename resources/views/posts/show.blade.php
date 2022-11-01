<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/show.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content_post">
                <h5>詳細</h5>
                <p>{{ $post->body }}</p>    
            </div>
            
        </div>
        
    <div class=comments>
        <h5>コメント欄</h5>
        @foreach ($comments as $comment)
        <p class = come>{{$comment->username}}:{{$comment->body}}</p>   
        @endforeach 
    </div>
        
        
    <form action="/posts/comment" method="POST">
        @csrf
            <div class="body">
                
                <textarea style="display:none" name="comment[username]" readonly>{{Auth::user()->name}} </textarea>
                
                <textarea name="comment[body]" placeholder="コメントをしよう"></textarea>
                
                <textarea style="display:none" name="comment[post_id]" readonly>{{$post->id}} </textarea>
                
            </div>
            <input type="submit" value="送信"/>
    </form>  
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>