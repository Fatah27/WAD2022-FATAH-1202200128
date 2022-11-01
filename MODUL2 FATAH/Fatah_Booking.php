    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking</title>
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
            <h1 class="title" style="text-align :center;">Rent Your Car Now!</h1>

            <div class="row">
                <div class="col">
                    <br><br><br><br><br>
                    <p class="row justify-content-center align-content-center mt-5"><img src="<?php
                                                                if (isset($_POST['img'])) {
                                                                    $img = $_POST['img'];
                                                                    echo $img;
                                                                } else {
                                                                    echo "img/1.png";
                                                                }
                                                                ?>" width="85%" alt=""></p>
                </div>

                <div class="col mb-3">
                    <br>
                    <form action="Fatah_MyBooking.php" method="post">
                        <div class="mb-3">
                            <label for="Nama">Name</label>
                            <input type="text" class="form-control bg-light" id="Name" readonly="readonly" value="Fatah_1202200128" name="Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="Date">Book Date</label>
                            <input type="date" class="form-control" id="Date" name="Date" required>
                        </div>

                        <div class="mb-3">
                            <label for="Start">Start Time</label>
                            <input type="time" class="form-control" id="Start" name="Start" required>
                        </div>

                        <div class="mb-3">
                            <label for="Duration">Duration (days)</label>
                            <input type="number" class="form-control" id="Duration" name="Duration" required>
                        </div>

                        <div class="mb-3">
                            <label for="Type">Car Type</label>
                            <select class="form-control" name="Type" id="Type" required>
                                <option value=""><?php
                                                    if (isset($_POST['img'])) {
                                                        $img = $_POST['img'];
                                                        if ($img == "img/1.png") {
                                                            echo "Toyota Vellfire";
                                                        } else if ($img == "img/2.png") {
                                                            echo "Honda Civic";
                                                        } else if ($img == "img/3.png") {
                                                            echo "Toyota Fortuner";
                                                        }
                                                    } else {
                                                        echo "Chosee...";
                                                    }
                                                    ?>
                                </option>
                                <option value="Toyota Vellfire">Toyota Vellfire</option>
                                <option value="Honda Civic">Honda Civic</option>
                                <option value="Toyota Fortuner">Toyota Fortuner</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Phone">Phone Number</label>
                            <input type="number" class="form-control" id="Phone" name="Phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="Service">Add Service(s)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox1">
                                <label class="form-check-label" for="Health">
                                    Health Protocol / Rp 25.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox2">
                                <label class="form-check-label" for="Driver">
                                    Driver / Rp 300.000
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox3">
                                <label class="form-check-label" for="Fuel">
                                    Fuel Filled / Rp 500.000
                                </label>
                            </div>
                        </div>

                        <div class="mb-3 d-grid gap-2">
                            <class="btn btn-primary btn-block" type="submit">Book
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <footer class="text-center bg-light p-2">
            <p>FATAH_1202200128</p>
        </footer>
    </body>

    </html>