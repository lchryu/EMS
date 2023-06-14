<!-- resources/views/employees/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Employee</h1>

    <form method="POST" action="{{ route('employees.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" name="salary" id="salary" step="0.01" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
