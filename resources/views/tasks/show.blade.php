@extends('layouts.template')

@section('title', 'To-do app')

@section('content')
    <div class="containter">
        <div class="row py-5">
            <div class="col-sm-12 col-lg-8 offset-lg-2">
                <p>
                    <a href="{{ route('tasks.index') }}"> &larr; Main page</a>
                </p>
                <div class="col-sm-12">
                    <h2>{{$task->title}}</h2>
                    <p><b>Created:</b> {{$task->created_at->format('Y-m-d \a\t H:i')}}
                </p>
                @if($task->content)
                <p class="card-text">{{ $task->content }}</p>
                @endif
                <p class="card-text">
                    Status: 
                    @switch($task->status)
                        @case(\App\Models\Task::getStatus('Active'))
                        <b class="alert-success">Active<b>
                            @break
                        @case(\App\Models\Task::getStatus('Completed'))
                        <b class="alert-danger">Completed<b>
                            @break
                        @default
                            
                    @endswitch
                </p>

                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary" href="#">Edit</button>
                    <button type="button" class="btn btn-danger" href="#">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
