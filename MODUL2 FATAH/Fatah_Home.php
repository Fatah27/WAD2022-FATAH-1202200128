<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class=" nav-item">
                    <a class="nav-link" href="Fatah_Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Fatah_Booking.php">Booking</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <br>
        <h4 class="row justify-content-center align-content-center">WELCOME TO EAD RENT!</h4>
        <p class="title" style="text-align :center;">Find Your Best Deal, Here!</p>
        <br>
        <br>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/1.png" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Vellfire</h5>
                        <p class="card-text">Rp 1.500.000 / Day </p>
                        <ul class="list-group list-group-flush" style="text-align :center;">
                            <li class="list-group-item text-primary">7 Seat</li>
                            <li class="list-group-item text-primary">2500 cc</li>
                            <li class="list-group-item text-primary">Matic</li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <form action="Fatah_Booking.php" method="post">
                            <button class="btn btn-primary" name="img" type="submit" value="img/1.png">Booking Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Honda Civic</h5>
                        <p class="card-text">Rp 1.000.000 / Day </p>
                        <ul class="list-group list-group-flush" style="text-align :center;">
                            <li class="list-group-item text-primary">4 Seat</li>
                            <li class="list-group-item text-primary">2000 cc</li>
                            <li class="list-group-item text-primary">Matic</li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <form action="Fatah_Booking.php" method="post">
                            <button class="btn btn-primary" name="img" type="submit" value="img/2.png">Booking Now</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Toyota Fortuner</h5>
                        <p class="card-text">Rp 1.300.000 / Day </p>
                        <li class="list-group list-group-flush" style="text-align :center;">
                            <li class="list-group-item text-primary">7 Seat</li>
                            <li class="list-group-item text-primary">2800 cc</li>
                            <li class="list-group-item text-primary">Matic</li>
                        </li>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <form action="Fatah_Booking.php" method="post">
                            <button class="btn btn-primary" name="img" type="submit" value="img/3.png">Booking Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
    <footer class="text-center bg-light p-2">
        <p>FATAH_1202200128</p>
    </footer>
</body>

</html>