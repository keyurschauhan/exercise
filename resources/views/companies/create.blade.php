@extends('layouts.main')
@section('title', 'Create Company')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Company Create</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="logo">Logo<p class="text-danger fs-7">Note: Please upload a PNG, JPG, or JPEG image with minimum dimensions of 100x100 pixels.</p></label>
                    <input type="file" class="form-control-file" id="logo" name="logo">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website" placeholder="Website" name="website">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
