<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent A Car</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
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
<div class="other-locations container ">
    <div class="locations-list col-md-auto">
        <h2>Our head locations:</h2>
        <div class="location row">
            <div class="left-side">
                <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
            </div>
            <div class="right-side">
                <h3>Location: Breda</h3>
                <h3>Street name: Testing 21</h3>
                <h3>Telephone number: 0612345678</h3>
                <h3>Email: breda@rent-a-car.nl</h3>
            </div>
        </div>
        <h2>Our other locations:</h2>
        <div class="location row">
            <div class="left-side">
                <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
            </div>
            <div class="right-side">
                <h3>Location: Amsterdam</h3>
                <h3>Street name: Fademan 100</h3>
                <h3>Telephone number: 0612345677</h3>
                <h3>Email: amsterdam@rent-a-car.nl</h3>
            </div>
        </div>
        <div class="location row">
            <div class="left-side">
                <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
            </div>
            <div class="right-side">
                <h3>Location: Eindhoven</h3>
                <h3>Street name: Airportlaan 20</h3>
                <h3>Telephone number: 0612345676</h3>
                <h3>Email: eindhoven@rent-a-car.nl</h3>
            </div>
        </div>
        <div class="location row">
            <div class="left-side">
                <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
            </div>
            <div class="right-side">
                <h3>Location: Utrecht</h3>
                <h3>Street name: Wereldbouw 1</h3>
                <h3>Telephone number: 0612345671</h3>
                <h3>Email: utrecht@rent-a-car.nl</h3>
            </div>
        </div>
        <div class="location row">
            <div class="left-side">
                <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
            </div>
            <div class="right-side">
                <h3>Location: Rotterdam</h3>
                <h3>Street name: Route 66</h3>
                <h3>Telephone number: 06123456732</h3>
                <h3>Email: rotterdam@rent-a-car.nl</h3>
            </div>
        </div>
        <div class="location row">
            <div class="left-side">
                <img src="https://via.placeholder.com/200/09f.png/fff" alt="Car Image">
            </div>
            <div class="right-side">
                <h3>Location: Venlo</h3>
                <h3>Street name: Witcher 3</h3>
                <h3>Telephone number: 0612345679</h3>
                <h3>Email: venlo@rent-a-car.nl</h3>
            </div>
        </div>

    </div>
</div>
<footer>
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
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