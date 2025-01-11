@extends('adminDash.master')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">User</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            @can('create user')
            <a href="{{ url('admin/users/create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create User</a>
            @endcan
        </div>
    </div>
</div>


<div class="mt-2">
    <div class="card">
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
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $rolename)
                                <label class="badge bg-primary mx-1 text-white">{{ $rolename }}</label>
                                @endforeach
                                @endif
                            </td>
                            <td>
                                @can('update user')
                                <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-success">Edit</a>
                                @endcan

                                @can('delete user')
                                <a href="{{ url('admin/users/'.$user->id.'/delete') }}" class="btn btn-danger mx-2">Delete</a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
