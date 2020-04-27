@extends('layouts.app')

@section('content')
<div class="container cent">
    <div class="row justify-content-center register-border col-md-12">
        <div class="register-bg col-md-6 d-none d-sm-none d-md-block">

        </div>
        <div class="col-md-6 p-4">
            <div class="center-v">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">


                        <div class="col-md-12">
                            <label for="name" class="col-form-label text-light-1">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="email" class="text-light-1 col-form-label">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="password" class="col-form-label text-light-1">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="password-confirm" class="col-form-label text-light-1">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-dark rounded-pill button">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
