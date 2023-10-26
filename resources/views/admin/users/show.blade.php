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
                <h2>{{ $user->name }}</h2>
            </div>
            <div class="card-body">
                <div class="time text-right">
                    @if($user->created_at == $user->updated_at)
                        <span>🟢 Created at: {{$user->created_at}}</span>
                    @else
                        <span>🟠 Edited at: {{$user->updated_at}}</span>
                    @endif
                </div>
                <table class="table">
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-link">Edit</a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link"
                            onclick="return confirm('Are you sure you want to delete this user?')">Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
