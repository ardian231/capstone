@extends('layout')

@section('title', 'Create Comment')

@section('content')
    <h1>Create Comment</h1>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment" required></textarea>
        </div>
        <div class="mb-3">
            <label for="post_id" class="form-label">Post</label>
            <select class="form-control" id="post_id" name="post_id" required>
                @foreach($posts as $post)
                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
