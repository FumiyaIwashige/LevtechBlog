<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    @extends('layouts.app')
    
    @section('content')
    <body>
        <h1 class="title">edit</h1>
        <form action="/posts/{{ $post->id }}" method='POST'>
                {{ csrf_field() }}
                @method('PUT')
                <div class='content__title'>
                    <h2>Title</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>Body</h2>
                    <textarea type="text" name="post[body]" placeholder="今日も一日お疲れ様でした．">{{ $post->body }}</textarea>
                </div>
                <input type="submit" value="保存">
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
    @endsection
</html>