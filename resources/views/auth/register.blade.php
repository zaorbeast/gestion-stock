@extends('layouts.loginLayout')

@section('content')
<div class="limiter">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="wrap-login100">

                    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                        @csrf

                        <span class="login100-form-logo">
                            <i class="zmdi zmdi-landscape"></i>
                        </span>

                        <span class="login100-form-title p-b-34 p-t-27">
                            Resgister
                        </span>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="role" placeholder="Role" type="number" class="input100 @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="name" placeholder="Name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email" required autocomplete="email">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input100" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
