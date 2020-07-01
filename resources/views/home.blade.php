@extends('layouts.app')

@section('content')

    <div class="mx-5 container">
        <div class="row justify-content-center">
            <div class="col-md-2 border-right">
                <a href="{{route('showTask')}}"><h4>Task List</h4></a>
                <a href="{{route('create')}}"><h4>Create Task</h4></a>
                <a href="{{route('modify')}}"><h4>Edit Task</h4></a>
                <a href="{{route('destroy')}}"><h4>delete  Task</h4></a>
            </div>
            <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                   
                </div>
            </div>
        </div>
    </div>
@endsection
