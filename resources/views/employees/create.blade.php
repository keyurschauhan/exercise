@extends('layouts.main')
@section('title', 'Create Employee')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Employee Create</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                <div class="form-group">
                    <label for="first_name">First Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                </div>
                <div class="form-group">
                    <label for="company_id">Company<span class="text-danger">*</span></label>
                    <select class="form-control" id="company_id" name="company_id">
                        <option value="" selected> --Select Company-- </option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
