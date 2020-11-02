@extends('layouts.base')

    @section('body')
        {{-- include to navition bar --}}
        @include('layouts.top_nav')
        
        {{-- including main content page --}}
        @yield('content')
    
    @endsection
        
        
