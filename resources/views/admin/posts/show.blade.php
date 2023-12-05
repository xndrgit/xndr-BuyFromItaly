\1@extends('layouts.app')

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
                <h2>{{ $post->name }}</h2>
            </div>
            <div class="card-body">

                @if($post->cover)
                    <div class="mb-3">
                        <img class="img-fluid w-25" src="{{ asset('storage/' . $post->cover) }}" alt="Post Cover Image">
                    </div>
                @endif

                    <div class="mb-3">
                        @if($post->category)
                            <div class="badge" style="background-color: {{ $post->category->color }}">
                                {{ $post->category->name }}
                            </div>
                        @else
                            <div class="badge" style="background-color: gray;">
                                No Category
                            </div>
                        @endif
                    </div>

                    <p><strong>Description:</strong>{{ $post->description }}</p>
                    <p><strong>Price:</strong> {{ $post->price }}</p>

                @if($post->promo_price)
                    <p><strong>Promo Price:</strong> {{ $post->promo_price }}</p>
                @else
                    <p><strong>Promo Price:</strong> Not Available</p>
                @endif


                    <p><strong>Shop link:</strong> {{ $post->shop_link }}</p>


                <div class="mt-3">
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-link" title="Edit Post">
                        <i class="fas fa-edit"></i> Edit Post
                    </a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link" title="Delete Post"
                                onclick="return confirm('Are you sure you want to delete this post?')">
                            <i class="fas fa-trash-alt"></i> Delete Post
                        </button>
                    </form>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-link" title="Back to Posts">
                        <i class="fas fa-arrow-left"></i> Back to Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
