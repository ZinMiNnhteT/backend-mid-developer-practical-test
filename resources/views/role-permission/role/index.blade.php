@extends('adminDash.master')
@section('content')

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">{{ __('roles') }}</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item link-name"><a href="javascript:void(0)">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item link-name active">{{ __('roles') }}</li>
            </ol>
            @can('create role')
            <a href="{{ route('roles.create')}}" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> {{ __('Create') }}</a>
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
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th width="40%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a href="{{ url('admin/roles/'.$role->id.'/give-permissions') }}" class="btn btn-warning">
                        Add / Edit Role Permission
                    </a>

                    @can('update role')
                    <a href="{{ url('admin/roles/'.$role->id.'/edit') }}" class="btn btn-success">
                        Edit
                    </a>
                    @endcan

                    @can('delete role')
                    <a href="{{ url('admin/roles/'.$role->id.'/delete') }}" class="btn btn-danger mx-2">
                        Delete
                    </a>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>

@endsection
