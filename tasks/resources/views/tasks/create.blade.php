@extends('layouts.app')

@section('content')
    <h1>Set a task</h1>
    {!! Form::open(["action" => "App\Http\Controllers\TasksController@store", "method" => "POST", "enctype" =>"multipart/form-data"]) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}} 
            {{Form::text('name', '', ['class' => 'form-control-sm', 'placeholder' => 'Tasks name'])}} 
        </div>
        <br>
        {{Form::submit('Add Task', ['class' => 'btn btn-outline-primary'])}}
    {!! Form::close() !!}
@endsection