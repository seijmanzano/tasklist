@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class='card card-body bg-light'>
                <h3>{{$task->name}}</h3>
                <small>Created on {{$task->created_at}}</small>
            </div>
            <br>
        @endforeach
        {{$tasks->links('pagination::bootstrap-4')}}
    @else
        <p>No tasks created yet</p>   
    @endif
@endsection