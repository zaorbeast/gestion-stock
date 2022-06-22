@extends('layouts.user.userLayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
