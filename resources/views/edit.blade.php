@extends('layouts.app')
 
@section('content')
<div class="container">
    <h1>Edit Page</h1>
</div>
<div class="container">
    <form action="{{route('update',$task->id)}}" method="POST">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" value="{{$task->title}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" value="{{$task->description}}" id="exampleInputPassword1" name="description">
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

@endsection
