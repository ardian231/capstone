@extends('layout')

@section('title', 'Edit Comment')

@section('content')
    <h1>Edit Comment</h1>
    <form action="{{ route('comments.update', $comment) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" required>{{ $comment->comment }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
