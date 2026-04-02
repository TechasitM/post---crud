@extends('layout')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <form action="{{ route('store') }}" method="POST" class="bg-base-100 p-6 rounded-lg shadow-md">
    @csrf
    <div class="mb-4">
        <label for="title" class="label">
            <span class="label-text">Title</span>
        </label>
        <input type="text" name="title" class="input input-bordered w-full" required>
    </div>
    <div class="mb-4">
        <label for="content" class="label">
            <span class="label-text">Content</span>
        </label>
        <textarea name="content" class="textarea textarea-bordered w-full" rows="5" required></textarea>
    </div>
    <div class="flex space-x-2">
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
    </div>
</form>

@endsection