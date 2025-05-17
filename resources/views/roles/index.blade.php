@extends('layouts.admin')
@section('title', 'Role Management')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Roles</h4>
        <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm">+ Add Role</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>
                        @foreach($role->permissions as $permission)
                            <span class="badge badge-info">{{ $permission->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('roles.edit', $role) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('roles.destroy', $role) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this role?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
