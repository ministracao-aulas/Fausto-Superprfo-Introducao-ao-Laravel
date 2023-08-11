@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="w-100">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user?->id }}</td>
                        <td>{{ $user?->name }}</td>
                        <td>{{ $user?->email }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                            <button type="button" class="btn btn-sm btn-info">Edit</button>
                            <button type="button" class="btn btn-sm btn-secondary">View</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="w-100">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
