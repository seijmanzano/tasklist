@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">New Task</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::open(["action" => "App\Http\Controllers\TasksController@store", "method" => "POST", "enctype" =>"multipart/form-data"]) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Task name')}} 
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Task Name'])}} 
                        </div>
                        <br>
                        {{Form::submit('Add Task', ['class' => 'btn btn-outline-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Tasks list</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your tasks</h3>
                    @if (count($tasks) > 0)                                                        
                    <table>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($tasks as $task)
                            <tr>
                                <td style="padding-right: 80px">{{$task->name}}</td>
                                <th></th>
                                <th></th>
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\TasksController@destroy', $task->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit(' Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!} 
                                </td>
                            </tr>
                        @endforeach                        
                    </table>
                    @else
                        <p>No tasks yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
