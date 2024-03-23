@extends('layouts.main')
@section('title','Dashboard')

@section('page-title','Dashboard')
@section('content')

<div class="row">
    <div class="col-lg-6 col-md-6">
        <a href="{{ route('companies.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8"><h2>{{ $company_count ?? 0 }} </h2>
                            <h6>Companies</h6></div>
                        <div class="col-4 align-self-center text-right  p-l-0">
                            <i class="mdi mdi-hospital-building fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-6 col-md-6">
        <a href="{{ route('employees.index') }}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8"><h2>{{ $employee_count ?? 0 }} </h2>
                            <h6>Employees</h6></div>
                        <div class="col-4 align-self-center text-right  p-l-0">
                            <i class="mdi mdi-account-multiple fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
