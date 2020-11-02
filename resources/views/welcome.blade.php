@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                        >
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
                    </a>

                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        {{ config('app.name') }}
                    </h1>

                    <a class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out" href="{{ route('todos') }}">
                        Add Todos
                    </a>

                    
                </div>
            </div>
        </div>
    </div>
@endsection
