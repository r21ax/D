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
        {{Auth::user()->name}}
        <h1>新着順</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3 class='prefecture_id'>
                      <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->prefecture }}</a>
                    </h3>
                    
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
