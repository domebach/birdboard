@extends('layouts.app')

@section('content')
<div class="w-2/3 mx-auto">
    <div class="">
        <div class="">
            <div class="card py-10">
                <div class="text-center text-2xl">{{ __('Register') }}</div>

                <div class="w-5/6 mx-auto my-10">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="pb-8">
                            <label for="name" class="">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="mt-2 p-2 w-full border-2 border-grey-lightest
                                    rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                                       required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-8">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="mt-2 p-2 w-full border-2 border-grey-lightest
                                    rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pb-8">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="mt-2 p-2 w-full border-2 border-grey-lightest
                                    rounded" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button">
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
