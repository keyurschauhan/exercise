@extends('layouts.main')
@section('title', 'Company Details')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Company Details</h3>
            <div class="card-tools">
                <a href="{{ route('companies.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="first_name" class="font-weight-bold">Name:</label>
                <p>{{ $company->name }}</p>
            </div>
            <div class="form-group">
                <label for="last_name" class="font-weight-bold">Email:</label>
                <p>{{ $company->email }}</p>
            </div>
            <div class="form-group">
                <label for="company_id" class="font-weight-bold">Logo:</label>
                @if ($company->logo)
                <p><img src="{{ asset('storage/logos/'.$company->logo) }}" alt="{{ $company->name }}" class="img-thumbnail" width="100" height="100"></p>
                @else
                    <p>No Logo</p>
                @endif
            </div>
            <div class="form-group">
                <label for="email" class="font-weight-bold">Website:</label>
                <p>{{ $company->website }}</p>
            </div>
        </div>
    </div>
@endsection
