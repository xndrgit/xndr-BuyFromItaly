@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Create User</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name: <strong>*</strong></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email: <strong>*</strong></label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: <strong>*</strong></label>
                        <input type="password" class="form-control" id="password" name="password">
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

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
