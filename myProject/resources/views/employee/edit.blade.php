<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Employee Management System</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>


    <!-- Page Content Holder -->
    <div id="content">
            <nav>
                <div class="container">
                    <h1>Employee Management</h1>
                        <div class="back" style="float: right">
                            <a href="{{route('main')}}" class="btn" style="color: black; background-color: #6d7fcc">Go Back</a>
                        </div>
                    <h2>Update Employee Info:</h2>
                    <div class="delete" style="float: right">
                        <a href="{{route('employee.delete',$employee -> id)}}" class="btn btn-danger" style="color: black">Delete This Employee</a>
                    </div>
<br><br><br>
                @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <br>
                    <form method="post" action="{{route('employee.update',$employee -> id)}}">
                        @csrf
                        {{--<input name="_token" value"{{csrf_token()}}">--}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Employee Name</label>
                            <input type="text" class="form-control" name="name" value="{{$employee -> name}}" aria-describedby="emailHelp" placeholder="Enter Name">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPrice">Employee Age</label>
                            <input type="text" class="form-control" name="age" value="{{$employee -> age}}" placeholder="Age">
                            @error('age')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDetails">Employee Address</label>
                            <input type="text" class="form-control" name="address" value="{{$employee -> address}}" placeholder="Address">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDetails">Employee Country</label>
                            <input type="text" class="form-control" name="country" value="{{$employee -> country}}" placeholder="Country">
                            @error('country')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDetails">Employee Department</label>
                            <input type="text" class="form-control" name="department" value="{{$employee -> department}}" placeholder="Department">
                            @error('department')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDetails">Employee City</label>
                            <input type="text" class="form-control" name="city" value="{{$employee -> city}}" placeholder="City">
                            @error('city')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDetails">Employee Division</label>
                            <input type="text" class="form-control" name="division" value="{{$employee -> division}}" placeholder="Division">
                            @error('division')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDetails">Employee Region</label>
                            <input type="text" class="form-control" name="region" value="{{$employee -> region}}" placeholder="Region">
                            @error('region')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFile">Choose File</label>
                            <input type="file" class="form-control" value="{{$employee -> photo}}" name="photo" >
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn "style="color: black;background-color: #6d7fcc">Update</button>
                    </form>

                </div>
        </nav>
    </div>








<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>
</html>
