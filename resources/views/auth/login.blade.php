@extends('layouts.app')

@section('content')

    <div class="w-full max-w-5xl mx-auto bg-white">
        <div class="flex justify-center bg-white w-full">
            <div class="card">
                <div class="font-bold">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" class="w-full text-lg font-bold" action="{{ route('login') }}">
                        @csrf

                        <div class="w-full">
                            <label for="email" class="font-bold">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="font-bold">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('password.request') }}">
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

@endsection
