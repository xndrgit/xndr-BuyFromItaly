@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Users</h1>

        <!-- Display success message if it exists in the session -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Create User</a>
        </div>

        <table class="table table-dark table-hover">
            <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th> <!-- Add Actions column if needed -->
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex">
                        <a href="{{route('admin.users.show', $user->id)}}" class="btn btn-link" title="Show Post">
                            <i class="fas fa-eye"></i> Show
                        </a>
                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-link" title="Edit Post">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link"
                                    onclick="return confirm('Are you sure you want to delete this user?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
