@extends('layout')

@section('title', 'Post Details')

@section('content')
    <h1>Post Details</h1>
    <p><strong>ID:</strong> {{ $post->id }}</p>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Body:</strong> {{ $post->body }}</p>
    <p><strong>Author:</strong> {{ $post->user->name }}</p>
    <p><strong>Category:</strong> {{ $post->category->name }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
@endsection
