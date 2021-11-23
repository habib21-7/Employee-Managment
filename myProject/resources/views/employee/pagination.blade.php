
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Laravel</title>
</head>
<body>
<div class="container">
    <h2>Employees:</h2>
    <div class="back" style="float: right">
        <a href="{{route('main')}}" class="btn" style="color: black; background-color: #6d7fcc">Go Back</a>
    </div>
    <br><br>
    <table class="table table-bordered">
        <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>ADDRESS</th>
        <th>COUNTRY</th>
        <th>DEPARTMENT</th>
        <th>DIVISION</th>
        <th>CITY</th>
        <th>REGION</th>
        <th>PHOTO</th>

        </thead>
        @foreach($employees as $employee)
            <tbody>
            <td>{{$employee->id}}</td>
            <td>{{$employee -> name}}</td>
            <td>{{$employee -> age}}</td>
            <td>{{$employee -> address}}</td>
            <td>{{$employee -> country}}</td>
            <td>{{$employee -> department}}</td>
            <td>{{$employee -> division}}</td>
            <td>{{$employee -> city}}</td>
            <td>{{$employee -> region}}</td>
            <td><img style="width: 50px; height: 50px" src="{{asset('images/employee/'.$employee -> photo)}}"></td>

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

</body>
</html>
