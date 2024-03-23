@extends('layouts.main')
@section('title', 'Company List')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-space-between">
            <h3 class="card-title">Company List</h3>
            <div class="card-tools">
                <a href="{{ route('companies.create') }}" class="btn btn-primary">Add Company</a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($companies) > 0)
                        @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                    @if ($company->logo)
                                        <img src="{{ asset('storage/logos/'.$company->logo) }}" alt="{{ $company->name }}" class="img-thumbnail" width="100">
                                    @else
                                        No Logo
                                    @endif
                                </td>
                                <td>{{ $company->website }}</td>
                                <td>
                                    <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="6">No records founds.</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="card-footer clearfix">
            {{ $companies->links() }}
        </div>
    </div>
@endsection
