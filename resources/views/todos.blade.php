@extends('layouts.app')

@section('title', 'Todos App')

@section('content')

  @livewire('offline', key(microtime()))
  @livewire('todos.todos', key(microtime()))
@endsection