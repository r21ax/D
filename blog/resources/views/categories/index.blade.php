<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
   </head>
    <body>
        @extends('layouts.app')　　　　　　　　　　　　　　　　　　
        
        @section('content')
        <h1>新着順</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h1><a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->name }}</a></h1>
                    <!-- 画像を表示 -->
                    <img src="{{ $post->image }}">
                    <p class='comment'>{{ $post->comment }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        @endsection
    </body>
   
</html>
