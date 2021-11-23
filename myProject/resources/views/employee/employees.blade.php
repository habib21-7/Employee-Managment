<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <div id="content">
        <div class="container" >
            <nav class="navbar navbar-default">
                 <div class="container-fluid">
                      <div class="navbar-header">
                           <div>
                               <h1>Department Management</h1>

                               <h2 >List of Department</h2>
                             </div>
                       </div>


            </div>
                <div>
                    <h2 class="h22"></h2>
                </div>
                <h3>Search</h3>

                <div class="container-fluid" style="display: flex;gap: 30px">
                    <div class="form">
                        <form class="form-inline" method="post" action="{{url('/search2')}}" >
                            {{ csrf_field() }}
                            <label for="exampleInputEmail1">Department Name:-</label>
                            <input class="form-control" name="query2" type="text" placeholder="Enter Name">
                            <button type="submit" class="btn btn-default" style="color: black; background-color: #6d7fcc">
                                Search
                            </button>
                        </form>
                    </div>
                    <div class="show">
                        <a href="{{route('department.show')}}" class="btn" style="color: black; background-color: #6d7fcc">Show All Department</a>
                    </div>
                </div>
                <div>
                    <h2 class="h22"></h2>
                </div>
                <div class="container">
                    <h2>Employees:</h2>
                    <table class="table table-bordered">
                        <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DEPARTMENT</th>

                        </thead>
                        @foreach($employees as $employee)
                            <tbody>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee -> name}}</td>
                            <td>{{$employee -> department}}</td>

                            </tbody>
                        @endforeach
                    </table>

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
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
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
