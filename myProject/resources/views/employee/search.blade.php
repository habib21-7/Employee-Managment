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



<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Employee Management System</h3>
        </div>

        <ul class="list-unstyled components">
            <li>

                <a href="{{route('dashboard')}}" aria-expanded="false">Dashboard</a>

            </li>
            <li>
                <a href="{{route('main')}}"  aria-expanded="false">Employees Management</a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">System Management</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="{{route('main')}}">Employees</a></li>
                    <li><a href="{{route('main2')}}">Department</a></li>
                    <li><a href="#">Division</a></li>
                    <li><a href="#">Country</a></li>
                    <li><a href="#">Cities</a></li>
                    <li><a href="#">Regions</a></li>

                </ul>
            </li>
            <li>
                <a href="#">User Management</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li><a href="" >Contacts</a></li>
            <li><a href="" >About Us</a></li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse"   id="bs-example-navbar-collapse-1">
                    <div class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('welcome')}}" style="color: #47748b">Home</a>
                        </li>

                    </div>
                </div>
            </div>
        </nav>
        <h1>Employee Management</h1>

        <div class="container" >
            <nav class="navbar navbar-default">
                 <div class="container-fluid">
                      <div class="navbar-header">
                           <div>
                                  <h2 >List of Employee</h2>
                             </div>
                       </div>

                <div class="collapse navbar-collapse"   id="bs-example-navbar-collapse-1">
                    <div class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('employee.add')}}" class="btn" style="color: black; background-color: #6d7fcc">Add Employee</a>
                        </li>
                    </div>
                </div>
            </div>
                <div>
                    <h2 class="h22"></h2>
                </div>
                <div class="container-fluid">
                    <div class="form">
                        <form class="form-inline" method="post" action="{{url('/search')}}">
                            {{ csrf_field() }}

                            <h3>Search</h3>
                            <label for="exampleInputEmail1">Employee Name:</label>
                            <br>
                            <input class="form-control" name="query" type="search" placeholder="Enter Name">
                            <button type="submit" class="btn btn-default"style="color: black; background-color: #6d7fcc">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
                <div>
                    <h2 class="h22"></h2>
                </div>
                <div class="container">
                    <h2>Employee Searched:</h2>
                    <table class="table table-bordered">
                        <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>AGE</th>
                        <th>COUNTRY</th>
                        <th>DEPARTMENT</th>
                        <th>CITY</th>
                        <th>REGION</th>
                        <th>PHOTO</th>
                        <th>ACTION</th>
                        </thead>
                        @foreach($employees as $employee)
                            <tbody>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee -> name}}</td>
                            <td>{{$employee -> age}}</td>
                            <td>{{$employee -> country}}</td>
                            <td>{{$employee -> department}}</td>
                            <td>{{$employee -> city}}</td>
                            <td>{{$employee -> region}}</td>
                            <td><img style="width: 50px; height: 50px" src="{{asset('images/employee/'.$employee -> photo)}}"></td>
                            <td>
                                <a href="{{route('employee.edit',$employee -> id)}}" class="btn" style="color: black;background-color: #6d7fcc">Edit Employee</a>
                            </td>
                            </tbody>
                        @endforeach
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $employees -> links() !!}
                    </div>

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif
                </div>
        </nav>
    </div>


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
