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

                <a href="" aria-expanded="false">Dashboard</a>

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
        <div class="container" style="margin-top: 40px; ">
            <div class="row" style="display: flex; gap: 20px">
                    <div class="col-4">

                        <div class="item" style="display: flex; gap: 30px;">
                            <div class="em" style="font-size:x-large;">
                                <h3 style=" color: gray;"> Employees</h3>

                                <h4>
                                    <a class="hov" href="{{route('main')}}" style="width: 100%;color: gray">
                                       Info
                                        <i class="fa fa-arrow-circle-right fa-1x" style="color: #6d7fcc "></i>
                                    </a>
                                </h4>
                            </div>
                            <div class="icon" style=" padding: 5px ">
                         <i class="fa fa-shopping-bag fa-4x" style="color: #6d7fcc"></i>
                            </div>
                        </div>
                </div>
                <div class="col-4">
                    <a class="hov" href="" style="width: 100%">

                        <div class="item" style="display: flex; gap: 30px;">
                            <div class="em" style="font-size:x-large;">
                                <h3 style=" color: gray;">Department</h3>

                                <h4>
                                    <a class="hov" href="{{route('main2')}}" style="width: 100%;color: gray">
                                      Info
                                        <i class="fa fa-arrow-circle-right fa-1x" style="color: #6d7fcc "></i>
                                    </a>
                                </h4>
                            </div>
                            <div class="icon" style=" padding: 5px ">
                                <i class="fa fa-align-right fa-4x" style="color: #6d7fcc"></i>                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="hov" href="" style="width: 100%">

                        <div class="item" style="display: flex; gap: 30px;">
                            <div class="em" style="font-size:x-large;">
                                <h3 style=" color: gray;">  Division</h3>

                                <h4>
                                    <a class="hov" href="" style="width: 100%;color: gray">
                                       Info
                                        <i class="fa fa-arrow-circle-right fa-1x" style="color: #6d7fcc "></i>
                                    </a>
                                </h4>
                            </div>
                            <div class="icon" style=" padding: 5px ">
                                <i class="fa fa-user-plus fa-4x" style="color: #6d7fcc"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="hov" href="" style="width: 100%">

                        <div class="item" style="display: flex; gap: 30px;">
                            <div class="em" style="font-size:x-large;">
                                <h3 style=" color: gray;"> Country</h3>

                                <h4>
                                    <a class="hov" href="" style="width: 100%;color: gray">
                                       Info
                                        <i class="fa fa-arrow-circle-right fa-1x" style="color: #6d7fcc "></i>
                                    </a>
                                </h4>
                            </div>
                            <div class="icon" style=" padding: 5px ">
                                <i class="fa fa-adjust fa-4x" style="color: #6d7fcc"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row" style="display: flex;gap: 20px">
                <div class="col-4">
                    <a class="hov" href="" style="width: 100%">

                        <div class="item" style="display: flex; gap: 30px;">
                            <div class="em" style="font-size:x-large;">
                                <h3 style=" color: gray;"> Cities</h3>
                                <h4>
                                    <a class="hov" href="" style="width: 100%;color: gray">
                                       Info
                                        <i class="fa fa-arrow-circle-right fa-1x" style="color: #6d7fcc "></i>
                                    </a>
                                </h4>
                            </div>
                            <div class="icon" style=" padding: 5px ">
                                <i class="fa fa-adjust fa-4x" style="color: #6d7fcc"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-4">
                    <a class="hov" href="" style="width: 100%">

                        <div class="item" style="display: flex; gap: 30px;">
                            <div class="em" style="font-size:x-large;">
                                <h3 style=" color: gray;">Regions</h3>

                                <h4>
                                    <a class="hov" href="" style="width: 100%;color: gray">
                                        Info
                                        <i class="fa fa-arrow-circle-right fa-1x" style="color: #6d7fcc "></i>
                                    </a>
                                </h4>
                            </div>
                            <div class="icon" style=" padding: 5px ">
                                <i class="fa fa-adjust fa-4x" style="color: #6d7fcc"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
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
