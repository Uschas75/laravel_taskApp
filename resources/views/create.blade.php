@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="col-md-2 border-right">
                <a href="{{route('showTask')}}"><h4>Task List</h4></a>
                <a href="{{route('create')}}"><h4>Create Task</h4></a>
                <a href="{{route('modify')}}"><h4>Edit Task</h4></a>
                <a href="{{route('destroy')}}"><h4>delete  Task</h4></a>
            </div>
            <div class="col-md-10">

                <div class="container">
                    <h1>Add Task</h1>
                    
                </div>
                <div class="container">
                    <form action="{{route('store')}}" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                        </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>   
    </div>
</div>

@endsection
