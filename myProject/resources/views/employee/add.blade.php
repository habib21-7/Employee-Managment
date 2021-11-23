@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        form {
            display: block;
            margin-top: 0em;
        }

        form-items {
            display: flex;
        }

        form-input, .form-textarea {
            border-radius: 10px;
            border: 1px solid #b7b7b7;
            padding: 9px 20px;
        }
        form-input, .form-textarea {
            width: 100%;
            font-size: 17px;
            color: #999;
        }
        input {
            text-rendering: auto;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            appearance: auto;
            -webkit-rtl-ordering: logical;
            cursor: text;
            margin: 0em;
            font: 400 13.3333px Arial;

        }

        form-items, .form-items {
            margin-right: -15px;
            margin-left: -15px;
        }

        .form-group {
            margin-bottom: 20px;
        }
        form-item {
            padding: 0 15px;
        }
    </style>
</head>
    <body>

        <div class="container">
            <h2>Add New Employee</h2>
            <div class="back" style="float: right">
                <a href="{{route('main')}}" class="btn" style="color: black; background-color: #6d7fcc">Go Back</a>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <br>
                <form method="post" action="{{route('employee.store')}}" enctype="multipart/form-data">
                     @csrf
                       {{--<input name="_token" value"{{csrf_token()}}">--}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                         @error('name')
                         <small class="form-text text-danger">{{$message}}</small>
                         @enderror
                      </div>
                        <div class="form-group">
                            <label for="exampleInputPrice">Employee Age</label>
                            <input type="text" class="form-control" name="age"  placeholder="Age">
                            @error('age')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDetails">Employee Address</label>
                            <input type="text" class="form-control" name="address"  placeholder="Address">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                    <div class="form-group">
                        <label for="exampleInputDetails">Employee Country</label>
                        <input type="text" class="form-control" name="country"  placeholder="Country">
                        @error('country')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDetails">Employee Department</label>
                        <input type="text" class="form-control" name="department"  placeholder="Department">
                        @error('department')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDetails">Employee City</label>
                        <input type="text" class="form-control" name="city"  placeholder="City">
                        @error('city')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputDetails">Employee Division</label>
                        <input type="text" class="form-control" name="division"  placeholder="Division">
                        @error('division')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDetails">Employee Region</label>
                        <input type="text" class="form-control" name="region"  placeholder="Region">
                        @error('region')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDetails">Department ID</label>
                        <input type="text" class="form-control" name="id"  placeholder="ID">
                        @error('id')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="exampleFile">Choose File</label>
                            <input type="file" class="form-control" name="photo" >
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>



                     <button type="submit" class="btn btn-primary">Add Employee</button>
                  </form>

        </div>
    </body>
</html>
@stop
