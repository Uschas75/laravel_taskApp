@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="#">
         <!--bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    
    <body>
    <div class="mx-5 container">
        <div class="row">
            <div class="col-md-2 border-right">
                <a href="{{route('showTask')}}"><h4>Task List</h4></a>
                <a href="{{route('create')}}"><h4>Create Task</h4></a>
                <a href="{{route('modify')}}"><h4>Edit Task</h4></a>
                <a href="{{route('destroy')}}"><h4>delete  Task</h4></a>
            </div>


            <div class="col-md-10 ">
                <div class="text-center my-5">
                    <h1>Task App</h1>
                </div>
                 <div class="row"> 
                     @foreach($tasks as $task)
                    <div class="col-md-12 d-flex justify-content-center my-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Title: {{$task->title}}</h5>
                                <p class="card-text">Description: {{$task->description}}</p>
                                <p class="card-text">Created_at: {{$task->created_at}}</p>
                                <p class="card-text">Updated_at: {{$task->updated_at}}</p>
                           
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>       
    




        <!--bootstrap js-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>
</html>


@endsection
