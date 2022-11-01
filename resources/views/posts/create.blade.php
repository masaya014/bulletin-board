<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Play with me</title>
    </head>
    <body>
        <h1>Play with me</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>募集内容</h2>
                <input type="text" name="post[title]" placeholder="募集タイトル"/>
            </div>
            
            <textarea style="display:none" name="post[username]" readonly>{{Auth::user()->name}} </textarea>
            
            <div class="body">
                <h2>詳細</h2>
                <textarea name="post[body]" placeholder="募集要項"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>