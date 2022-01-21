@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://css.gg/add-r.css' rel='stylesheet'>
    <div class="container" style="margin-left:24%;">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default login">
                <div class="panel-heading">
                    <img src="{{ asset('main_logo.svg') }}" style="width: 20rem;margin-left: 38%;margin-top:10%" >
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label" style="margin-top:5%">Task</label>

                            <div class="row">

                                <div class="col-10">
                                    <input type="text" name="name" id="task-name" class="form-control" style="border-radius:20px"  value="{{ old('task') }}">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary" style="background-color:#336B90;width:7rem">
                                        <i class="gg-add-r"style="margin-left:35%"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default login" style="margin-top:5%">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody style="border-radius:20px">
                                @foreach ($tasks as $task)
                                    <tr style="background-color:white">
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST" style="margin-left:80%;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn" style="background-color:#336B90;">
                                                    <i class="fa fa-btn fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
