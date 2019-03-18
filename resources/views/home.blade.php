<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent A Car</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>

<header class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'contact'}}">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<div class="hero container">
    <img src="img/3.jpg" alt="Hero Image" class="hero-image img-fluid">
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="search container">
    <form action="{{route('search')}}" method="POST" class="form-inline">
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

<div class="cars container ">
    <div class="cars-list col-md-auto">
        <h2>Our cars:</h2>
        @foreach($cars as $car)
            <div class="car row">
                <div class="left-side">
                    <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
                </div>
                <div class="right-side">
                    <h3>Car: {{$car->brand}}</h3>
                    <h3>Licence plate: {{$car->licence_plate}}</h3>
                    <h3>Car type: {{$car->type}}</h3>
                    <h3>Day price: {{$car->day_price}}</h3>
                </div>
            </div>
        @endforeach
    </div>
</div>

<footer class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('information')}}">Algemeene Informatie</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item float-right">
                <a class="nav-link" href="https://www.tomasz-tabis.pl">Created by: Tomasz Tabi</a>
            </li>
        </ul>
    </nav>
</footer>

<script src="js/app.js"></script>
</body>
</html>