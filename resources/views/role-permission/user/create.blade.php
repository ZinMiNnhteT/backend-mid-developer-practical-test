@extends('adminDash.master')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">User</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('users.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-arrow-left"></i> Back </a>
        </div>
    </div>
</div>

@if ($errors->any())
<ul class="alert alert-warning">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif

<div class="card p-3">
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
@endsection
