@extends('layouts.main')
@section('title', 'Employee Details')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Employee Details</h3>
            <div class="card-tools">
                <a href="{{ route('employees.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="first_name" class="font-weight-bold">First Name:</label>
                <p>{{ $employee->first_name }}</p>
            </div>
            <div class="form-group">
                <label for="last_name" class="font-weight-bold">Last Name:</label>
                <p>{{ $employee->last_name }}</p>
            </div>
            <div class="form-group">
                <label for="company_id" class="font-weight-bold">Company:</label>
                <p>{{ $employee->company->name }}</p>
            </div>
            <div class="form-group">
                <label for="email" class="font-weight-bold">Email:</label>
                <p>{{ $employee->email }}</p>
            </div>
            <div class="form-group">
                <label for="phone" class="font-weight-bold">Phone:</label>
                <p>{{ $employee->phone }}</p>
            </div>
        </div>
    </div>
@endsection
