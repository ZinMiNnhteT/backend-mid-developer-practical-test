@extends('adminDash.master')
@section('content')

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif


<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">User</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            @can('create user')
            <a href="{{ route('users.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create User</a>
            @endcan
        </div>
    </div>
</div>



<div class="card">

    {{-- <div class="card-header">
        {!! Form::open(['route' => 'admin.promotions.index', 'method' =>
        'GET']) !!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::text('title', @$search['title'], ['class' => 'form-control', 'required', 'placeholder' =>trans('Search by blog title')]) !!}
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">{{ __('Search')}}</button>
    <a href='{{ route('admin.promotions.index')}}' class="btn btn-secondary">{{__('Clear Search')}}</a>
</div>
</div>
{!! Form::close() !!}
</div> --}}

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
@endsection
