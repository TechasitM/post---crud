@extends('layout')

@section('content')
 <div class="card mb-3 bg-base-300 shadow">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
   <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
@endsection