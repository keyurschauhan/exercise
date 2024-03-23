@extends('layouts.main')
@section('title', 'Edit Company')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Company Create</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $company->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $company->email }}">
                </div>
                <div class="form-group">
                    <label for="logo">Logo<p class="text-danger fs-7">Note: Please upload a PNG, JPG, or JPEG image with minimum dimensions of 100x100 pixels.</p></label>
                    @if ($company->logo)
                        <img src="{{ asset('storage/logos/'.$company->logo) }}" alt="{{ $company->name }}" class="img-thumbnail" width="100" height="100">
                    @else
                        No Logo
                    @endif
                    <input type="file" class="form-control-file mt-2" id="logo" name="logo">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website" name="website" placeholder="Website" value="{{ $company->website }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
