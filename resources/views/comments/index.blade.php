@extends('layout')

@section('title', 'Comments')

@section('content')
    <h1>Comments</h1>
    <a href="{{ route('comments.create') }}" class="btn btn-primary mb-3">Create New Comment</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Comment</th>
                <th>Post</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->comment }}</td>
                    <td>{{ $comment->post->title }}</td>
                    <td>{{ $comment->user->name }}</td>
                    <td>
                        <a href="{{ route('comments.show', $comment) }}" class="btn btn-info">View</a>
                        <a href="{{ route('comments.edit', $comment) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
