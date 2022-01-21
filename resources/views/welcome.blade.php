@extends('layouts.app')
@section('content')

    
        <div class="flex justify-center">
            @if (Route::has('login'))
                <div class="flex m-auto gap-4 p-6 mt-8">
                    @auth
                        <a href="{{ url('/home') }}" >Home</a>
                    @else
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="text-center mt-16">
            <h1>
                freeCodeGram
            </h1>
            <p>
                Welcome to the best social media website.
            </p>
        </div>
@endsection