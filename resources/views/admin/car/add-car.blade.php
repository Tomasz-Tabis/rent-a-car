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

<div class="add-car container">
    <h2 class="mt-4">Add car.</h2>
    <form action="{{route('store-car')}}" method="POST" class="form-inline mt-3">
        {{csrf_field()}}
        <div class="form-group col-md-3 flex-column">
            <label for="Brand">Car brand</label>
            <input type="text" name="brand" id="Brand" class="form-control">
        </div>
        <div class="form-group col-md-3 flex-column">
            <label for="licencePlate">Car licence plate</label>
            <input type="text" name="licence" id="licencePlate" class="form-control">
        </div>
        <div class="form-group col-md-3 flex-column">
            <label for="type">Car type</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>
        <div class="form-group col-md-3 flex-column">
            <label for="price">Car day price</label>
            <input type="number" name="price" id="price" class="form-control">
        </div>
        <button class="col-md-12 btn btn-success mt-5 mb-5">Add car</button>
    </form>
</div>

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