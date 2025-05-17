@extends('layouts.admin')

@section('title', 'Permission Management')

@section('content')
<div class="container">
    <h3>Permission List</h3>
    <a href="{{ route('permissions.create') }}" class="btn btn-primary mb-3">Add Permission</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($permissions as $permission)
            <tr>
                <td>{{ $permission->name }}</td>
                <td>
                    <a href="{{ route('permissions.edit', $permission) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('permissions.destroy', $permission) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
