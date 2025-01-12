@extends('adminDash.master')
@section('content')

@if (session('status'))
<div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">{{ __('permissions') }}</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item link-name"><a href="javascript:void(0)">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item link-name active">{{ __('permissions') }}</li>
            </ol>
            @can('create permission')
            <a href="{{ route('permissions.create')}}" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> {{ __('Create') }}</a>
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
            @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                    @can('update permission')
                    <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-success">Edit</a>
                    @endcan

                    {{-- @can('delete permission')
                    <a href="{{ route('permissions.delete', $permission->id) }}" class="btn btn-danger mx-2">Delete</a>
                    @endcan --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>

@endsection
