@extends('adminDash.master')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Company</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('companies.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-arrow-left"></i> Back </a>
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
        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Company Name -->
            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="phone" id="phone" name="phone" class="form-control" value="{{ old('email') }}" required>
            </div>


            <!-- Logo -->
            <div class="form-group">
                <label for="logo">Logo (minimum 100x100px)</label>
                <input type="file" id="logo" name="logo" class="form-control-file" accept="image/*">
            </div>

            <!-- Website -->
            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" id="website" name="website" class="form-control" value="{{ old('website') }}">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Company</button>
        </form>

    </div>
</div>
@endsection
