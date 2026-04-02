@extends('layout')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('update', $post) }}" method="POST" class="bg-base-100 p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="title" class="label">
            <span class="label-text">Title</span>
        </label>
        <input type="text" name="title" value="{{ $post->title }}" class="input input-bordered w-full" required>
    </div>
    <div class="mb-4">
        <label for="content" class="label">
            <span class="label-text">Content</span>
        </label>
        <textarea name="content" class="textarea textarea-bordered w-full" value="{{ $post->content }}"  rows="5" required></textarea>
    </div>
    <div class="flex space-x-2">
        <button type="submit" class="btn btn-success">Confirm</button>
        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
    </div>
</form>
@endsection