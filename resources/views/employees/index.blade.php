<!-- resources/views/employees/index.blade.php -->
@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Employee List</h1>

    <div class="mb-3">
        <a href="{{ route('employees.create') }}" class="btn btn-success">Add Employee</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('employees.edit', $employee->id) }}"><i class="bi bi-pencil-square"></i></a>
                        {{-- <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form> --}}
                        <a href="#"
                            onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this employee?')) { document.getElementById('delete-form-{{ $employee->id }}').submit(); }"
                            title="Delete"><i class="bi bi-trash3"></i></a>
                        <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
