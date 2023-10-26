@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Posts</h1>

        <!-- Display success message if it exists in the session -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary" title="Create Post">
                <i class="fas fa-plus-circle"></i> Create Post
            </a>
        </div>

        <table class="table table-dark table-hover">
            <thead class="thead-dark">
            <tr>
{{--                <th>Category</th>--}}
                <th>Name</th>
                <th>Description</th>
                <th>Cover</th>
                <th>Price</th>
                <th>Promo</th>
                <th>Actions</th> <!-- Add Actions column -->
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        @if($post->category)
                            <div class="badge-pill" style="background-color: {{ $post->category->color }}">
                                {{ $post->category->name }}
                            </div>
                        @else
                            No Category
                        @endif
                    </td>
                    <td>{{ $post->name }}</td>
                    <td>
                        @if($post->cover)
                            <img class="img-fluid w-25" src="{{ asset('storage/' . $post->cover)  }}"
                                 alt="Uploaded File">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $post->price }}</td>
                    <td>
                        @if($post->promo_price)
                            {{ $post->promo_price }}
                        @else
                            Not Available
                        @endif
                    </td>
                    <td class="d-flex">
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-link" title="Show Post">
                            <i class="fas fa-eye"></i> Show
                        </a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-link" title="Edit Post">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" title="Delete Post"
                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
@endsection
