{{-- <!-- resources/views/employees/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Employee Details</h1>

    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Address:</strong> {{ $employee->address }}</p>
    <p><strong>Salary:</strong> {{ $employee->salary }}</p>

    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info">Edit</a>
    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection --}}
{{-- @extends('layouts.app')

@section('content')
    <h1>Employee Details</h1>

    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Address:</strong> {{ $employee->address }}</p>
    <p><strong>Salary:</strong> {{ $employee->salary }}</p>

    <hr>

    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info">Edit</a>
    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection --}}
@extends('layouts.app')

@section('content')
    <h1>Employee Details</h1>

    <p><strong>Name:</strong> {{ $employee->name }}</p>
    <p><strong>Address:</strong> {{ $employee->address }}</p>
    <p><strong>Salary:</strong> {{ $employee->salary }}</p>

    <hr>

    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info">Edit</a>
    <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
@endsection
