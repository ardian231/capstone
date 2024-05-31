@extends('layout')

@section('title', 'Comment Details')

@section('content')
    <h1>Comment Details</h1>
    <p><strong>ID:</strong> {{ $comment->id }}</p>
    <p><strong>Comment:</strong> {{ $comment->comment }}</p>
    <p><strong>Post:</strong> {{ $comment->post->title }}</p>
    <p><strong>Author:</strong> {{ $comment->user->name }}</p>
    <a href="{{ route('comments.index') }}" class="btn btn-secondary">Back to Comments</a>
@endsection
