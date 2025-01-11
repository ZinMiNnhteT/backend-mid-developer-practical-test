@include('adminDash.header')
@include('adminDash.left-side-bar')
<div class="page-wrapper">
    <div class="container-fluid">


        {{-- @include('adminDash.body') --}}
        @yield('content')

        @include('adminDash.right-side-bar')
    </div>
</div>

@include('adminDash.footer')
