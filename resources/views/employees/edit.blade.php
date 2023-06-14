{{-- <!-- resources/views/employees/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>

    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $employee->name }}" required>

        <label for="address">Address:</label>
        <textarea name="address" id="address" required>{{ $employee->address }}</textarea>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary" step="0.01" value="{{ $employee->salary }}" required>

        <button type="submit">Update</button>
    </form>
@endsection --}}
<!-- resources/views/employees/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>

    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $employee->name }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control" required>{{ $employee->address }}</textarea>
        </div>

        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" name="salary" id="salary" step="0.01" value="{{ $employee->salary }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2 mb-2">Update</button>
    </form>
@endsection
