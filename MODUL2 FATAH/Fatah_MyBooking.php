    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyBooking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <?php
        $book_number = rand();
        $name = $_POST['Name'];
        $date = $_POST['Date'];
        $startDate = '';
        $time = $_POST['Start'];
        $duration = $_POST['Duration'];
        $endDate = '';
        $type = $_POST['Type'];
        $phone = $_POST['Phone'];
        $service = array();
        $price = 0;

        if(!empty($date)){
            $startDate = date('d/m/Y', strtotime($date));
            $endDate = date('d/m/Y', strtotime('+'.$duration.'days', strtotime($date)));
        }

        if($type == 'Toyota Vellfire'){
            $price = $duration*1500000;
        } else if($type == 'Honda Civic'){
            $price = $duration*1000000;
        } else if($type == 'Toyota Fortuner'){
            $price = $duration*1300000;
        }

        if (@$_POST['checkbox1'] == 'on') {
            array_push($service, "Health Protocol");
            $price+=25000;
        }
        if (@$_POST['checkbox2'] == 'on') {
            array_push($service, "Driver");
            $price+=300000;
        }
        if (@$_POST['checkbox3'] == 'on') {
            array_push($service, "Fuel Filled");
            $price+=500000;
        }



        ?>

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
            <h4 class="row justify-content-center align-content-center">Thank you <?php echo $name . " " ?> for booking</h4>
            <p class="row justify-content-center align-content-center">Please double check your booking details</p>
            <table class="table">
                <tr>
                    <td><b>Booking Number</b></td>
                    <td><b>Name</b></td>
                    <td><b>Start Date</b></td>
                    <td><b>End Date</b></td>
                    <td><b>Car Type</b></td>
                    <td><b>Phone Number</b></td>
                    <td><b>Service(s)</b></td>
                    <td>
                        <b>Total Price</b>
                    </td>
                </tr>

                <tr class="light">
                    <td><?=$book_number?></td>
                    <td><?=$name?></td>
                    <td><?=$startDate?></td>
                    <td><?=$endDate?></td>
                    <td><?=$type?></td>
                    <td><?=$phone?></td>
                    <td><?php 
                        if ($service!=NULL){
                            foreach ($service as $value){
                                echo "<li>$value</li>";
                            }
                        } else{
                            echo "No Service";
                        }
                        ?>
                        </td>
                    <td>Rp <?=$price?></td>
                </tr>
            </table>


        </div>

    </body>

    </html>