@extends('layouts.main')
@section('title', 'Edit Employee')


@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Employee Edit</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <div class="form-group">
                    <label for="first_name">First Name<span class="text-danger">*</span></label>
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="{{ $employee->first_name }}">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name<span class="text-danger">*</span></label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="{{ $employee->last_name }}">
                </div>
                <div class="form-group">
                    <label for="company_id">Company<span class="text-danger">*</span></label>
                    <select name="company_id" id="company_id" class="form-control">
                        <option value="" selected> --Select Company-- </option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}" {{ $company->id == $employee->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ $employee->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" value="{{ $employee->phone }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
