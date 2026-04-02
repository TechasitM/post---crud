@extends('layout')

@section('content')
    <h1>All Post</h1>
    <a href="{{route('create')}}" class="btn btn-soft btn-primary mb-3">+ Create New Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success')}}</div>
    @endif

    @if($posts->count())
        @foreach($posts as $post)
            <div class="card mb-3 bg-base-300 shadow">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ Str::limit($post->content, 100 )}}</p>
                    <div class="flex flex-wrap gap-2 mt-4">
                        <a href="{{route('show', $post)}}" class="btn btn-secondary btn-md btn-equal-size">View</a>
                        <a href="{{route('edit', $post)}}" class="btn btn-warning btn-md btn-equal-size">Edit</a>
                        <form action="{{route('delete', $post)}}" method="POST" style="display:inline" onsubmit="return confirm('คุณแน่ใจว่าต้องการลบโพสต์นี้?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-error btn-md btn-equal-size">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else 
        <div class="alert alert-info">ยังไม่มีโพสต์ในระบบ</div>
    @endif
@endsection