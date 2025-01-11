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
            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create User</button>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">

            @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Create User
                        <a href="{{ url('admin/users') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/users') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Roles</label>
                            <select name="roles[]" class="form-control" multiple>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role }}">{{ $role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
