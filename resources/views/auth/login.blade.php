@extends('layouts.app')

@section('content')
<div class="w-2/3 mx-auto">
    <div class="">
        <div class="">
            <div class="card py-10">
                <div class="text-center text-2xl">{{ __('Login') }}</div>

                <div class="w-5/6 mx-auto my-10">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="pb-8">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="mt-2 p-2 w-full border-2 border-grey-lightest
                                    rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                       required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-8">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="mt-2 p-2 w-full border-2 border-grey-lightest
                                    rounded @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-8">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button mr-3">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-grey" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
