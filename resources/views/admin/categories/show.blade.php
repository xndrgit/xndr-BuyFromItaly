@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Display success message if it exists in the session -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h2>{{ $category->name }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> {{ $category->description }}</p>
                <p><strong>Color:</strong> <span style="background-color: {{ $category->color }};">{{ $category->color }}</span></p>
            </div>
        </div>

        <h3 class="my-4 text-center">Posts in this Category</h3>
        <div class="row">
            @forelse($category->posts as $post)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        @if($post->cover)
                            <img class="card-img-top" src="{{ $post->cover }}" alt="Post Cover Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p>No posts in this category.</p>
                </div>
            @endforelse
        </div>



        <div class="mt-3">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary" title="Back to Categories">
                <i class="fas fa-arrow-left"></i> Back to Categories
            </a>
        </div>
    </div>
@endsection
