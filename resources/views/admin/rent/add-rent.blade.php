<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent A Car</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>

<header class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin')}}">Admin Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('add-reservation')}}">Add reservation</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Customer
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('customers-list')}}">Customer list</a>
                    <a class="dropdown-item" href="{{route('add-customer')}}">Add customer</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Car
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('car-list')}}">Car list</a>
                    <a class="dropdown-item" href="{{route('add-car')}}">Add car</a>
                </div>
            </li>
        </ul>
    </nav>
</header>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(isset($cars))
    <div class="cars-overview container">
        <h2>Cars that need to be ready to take off.</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Car ID</th>
                <th scope="col">Brand</th>
                <th scope="col">Licence plate</th>
                <th scope="col">Type</th>
                <th scope="col">Day price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <th>{{$car->id}}</th>
                    <th>{{$car->brand}}</th>
                    <td>{{$car->licence_plate}}</td>
                    <td>{{$car->type}}</td>
                    <td>{{$car->day_price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="rent-a-car container">
        <h2 class="mt-4">Add reservation.</h2>
        <form action="{{route('store-rent')}}" method="POST" class="form-inline mt-3">
            {{csrf_field()}}
            <div class="form-group col-md-3 card-columns flex-column">
                <label for="" class="exampleFormControlInput1">Select car</label>
                <select class="form-control" name="car_id">
                    @foreach($cars as $car)
                        <option value="{{$car->id}}">{{$car->brand . ' | ' .$car->licence_plate}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3 flex-column">
                <label for="selectCustomer">Select customer</label>
                <select class="form-control" name="user_id">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->first_letters . ' ' .$user->last_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-3 flex-column">
                <label for="">Start date</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="form-group col-md-3 flex-column">
                <label for="">End date</label>
                <input type="date" class="form-control" name="end_date">
            </div>
            <button class="col-md-12 btn btn-success mt-5 mb-5">Add reservation</button>
        </form>
    </div>
@else
    <div class="search container">
        <h3>Search available cars.</h3>
        <form action="{{route('reservation-search')}}" method="POST" class="form-inline">
            {{csrf_field()}}
            <div class="form-group ">
                <label class="col-form-label col-form-label-lg" for="BeginDate">Begin Date:</label>
                <input type="date" id="BeginDate" name="beginDate" class="form-control">
            </div>
            <div class="form-group">
                <label class="col-form-label col-form-label-lg" for="EndDate">End Date:</label>
                <input type="date" id="EndDate" name="endDate" class="form-control">
            </div>
            <button class="btn btn-dark">Search</button>
        </form>
    </div>
@endif

<footer class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Rent-A-Car</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item float-right">
                <a class="nav-link" href="https://www.tomasz-tabis.pl">Created by: Tomasz Tabi</a>
            </li>
        </ul>
    </nav>
</footer>

<script src="../js/app.js"></script>
</body>
</html>