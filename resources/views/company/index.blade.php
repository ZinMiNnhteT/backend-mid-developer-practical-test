@extends('adminDash.master')
@section('content')

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif


<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Company</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            @can('create user')
            <a href="{{ route('companies.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create</a>
            @endcan
        </div>
    </div>
</div>

<div class="card">

    <div class="card-header">
        <form action="{{ route('companies.index') }}" method="GET">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="name" value="{{ $search['name'] ?? '' }}" class="form-control" placeholder="{{ __('Search by company name') }}" />
                </div>

                <div class="col-md-3">
                    <input type="text" name="email" value="{{ $search['email'] ?? '' }}" class="form-control" placeholder="{{ __('Search by email') }}" />
                </div>

                <div class="col-md-3">
                    <input type="text" name="website" value="{{ $search['website'] ?? '' }}" class="form-control" placeholder="{{ __('Search by website') }}" />
                </div>

                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">{{ __('Search') }}</button>
                    <a href="{{ route('companies.index') }}" class="btn btn-secondary">{{ __('Clear Search') }}</a>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-striped m-b-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phon NO</th>
                        <th>Company Logo</th>
                        <th>Company Website link</th>
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
                        <td>{{ $company->phone }}</td>
                        <td><img src="{{ $company->logo }}" alt="Company Logo" width="100" height="100"></td>

                        <td>{{ $company->website }}</td>


                        <td>
                            {{-- @can('update user') --}}
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-success">Edit</a>
                            {{-- @endcan --}}

                            {{-- @can('delete user') --}}
                            <a href="{{ route('companies.delete', $company->id) }}" class="btn btn-danger mx-2">Delete</a>

                            {{-- @endcan --}}
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7">
                            <p class="noti-text">{{ __('There is no data') }}</p>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="pagination-wrap">
            {{ $companies->withQueryString()->links('pagination::bootstrap-5') }}
            {{-- {{ $companies->appends($search)->links('pagination::bootstrap-5') }} --}}


        </div>
    </div>

</div>
@endsection
