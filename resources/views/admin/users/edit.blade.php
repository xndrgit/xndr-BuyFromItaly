@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit User</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Name: <strong>*</strong></label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email: <strong>*</strong></label>
                        <input type="text" class="form-control" id="email" name="email"
                               value="{{ old('email', $user->email) }}">
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

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
