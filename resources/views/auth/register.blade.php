@extends('layouts.app')

@section('content')
<div class="w-full max-w-5xl mx-auto bg-white">
    <div class="flex justify-center bg-white w-full">
        <div class="col-md-8">
            <div class="card">
                <div class="font-bold">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div >
                                <input id="name" type="text" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="password" >{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg"  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="bg-slate-500 hover:bg-slate-700 border-4 border-black w-full rounded-md text-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" >
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
