@extends('layouts.app')

@section('title', 'Todos App')

@section('content')

  {{-- @livewire('offline', key(microtime())) --}}
  <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full mt-15">
    @livewire('todos.todos', key(microtime()))
  </div>
@endsection