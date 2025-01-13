@extends('adminDash.master')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Employee</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('employees.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-arrow-left"></i> Back </a>
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
        <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="">Employee Name</label>
                <input type="text" name="name" value="{{ $employee->name }}" class="form-control" />
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" readonly value="{{ $employee->email }}" class="form-control" />
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="mb-3">
                <label for="phone">Phone No</label>
                <input type="text" id="phone" name="phone" value="{{ $employee->phone }}" class="form-control" />
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="profile">Employee Profile</label>
                @if($employee->profile)
                <img src="{{ $employee->profile }}" alt="Employee Profile" class="img-thumbnail mb-2" width="100">

                @endif
                <input type="file" id="profile" name="profile" class="form-control" />
                @error('profile') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="company_id">Company Name</label>
                <select name="company_id" class="form-control" required>
                    <option value="">Select Company</option>
                    @foreach ($companies as $id => $name)
                    <option value="{{ $id }}" {{ old('company_id', $employee->company_id) == $id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
