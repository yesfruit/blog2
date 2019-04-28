@extends('layouts/main')
<html>
<head>
    <title></title>
</head>
<body>
    @section('menu')
    <li class="menu-text">Home</li>
    <li><a href="Articles">Articles</a></li>
    <li><a href="Contact">Contact</a></li>
    @endsection
    @section('content')
    <h1>Home</h1>
    <ul>
        @foreach ( $posts as $post )

           <li><a href="articles/{{ $post->post_name }}">{{ $post->post_title }}</a></li>

        @endforeach
    </ul>
   @endsection
