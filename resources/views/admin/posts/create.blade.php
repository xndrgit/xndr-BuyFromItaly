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
                <h2>Create New Post</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name <strong>*</strong></label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="description">Description <strong>*</strong></label>
                        <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price <strong>*</strong></label>
                        <input type="text" id="price" name="price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="promo_price">Promo Price</label>
                        <input type="text" id="promo_price" name="promo_price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="shop_link">Shop Link</label>
                        <input type="text" id="shop_link" name="shop_link" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="cover">Cover Image</label>
                        <input type="file" id="cover" name="cover" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category_id" class="form-control">
                            <option value="">No Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary" title="Create Post">
                            <i class="fas fa-save"></i> Create Post
                        </button>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary" title="Cancel">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
