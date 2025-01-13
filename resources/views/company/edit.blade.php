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
        <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="">Company Name</label>
                <input type="text" name="name" value="{{ $company->name }}" class="form-control" />
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" readonly value="{{ $company->email }}" class="form-control" />
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="mb-3">
                <label for="phone">Phone No</label>
                <input type="text" id="phone" name="phone" value="{{ $company->phone }}" class="form-control" />
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="logo">Company Logo</label>
                @if($company->logo)
                <img src="{{ $company->logo }}" alt="Company Logo" class="img-thumbnail mb-2" width="100">

                @endif
                <input type="file" id="logo" name="logo" class="form-control" />
                @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="website">Company Website Link</label>
                <input type="url" id="website" name="website" value="{{ $company->website }}" class="form-control" />
                @error('website') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
