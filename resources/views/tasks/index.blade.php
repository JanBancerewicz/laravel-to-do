@extends('layouts.template')

@section('title', 'To-do app')

@section('content')
    @include('tasks.partial.nav')
    @include('tasks.partial.list')
@endsection
