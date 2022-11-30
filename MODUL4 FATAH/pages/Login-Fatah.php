<?php
require '../config/connector.php';
session_reset();

if(isset($_POST["submit"])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($database, "select * from user_fatah where email = '$email'");
	
	if(mysqli_num_rows($query) == 1){
		$result = mysqli_fetch_assoc($query);
		
		if($password == $result["password"]){
			$_SESSION['login'] = true;
			$_SESSION['id'] = $result['id'];
			header("Location: Home-Fatah.php");
			exit;
		}

		
	}


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body id="login_register">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1579778979547-f218ef8f28e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Ym13JTIwaTh8ZW58MHx8MHx8&w=1000&q=80"
                                    alt="login image" class="img-fluid h-100 img-fill" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="../config/login.php" enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3"></i>
                                            <span class="h1 fw-bold mb-0">Login</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3">Sign into your account</h5>

                                        <div class="form-floating mb-4">
                                            <input type="text" name="username" id="labeluser" autofocus autocomplete class="form-control form-control-lg" />
                                            <label class="form-label" for="labeluser">Username</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" id="labelpassword" name="pwd"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="labelpassword">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <!-- <button class="btn btn-dark btn-lg btn-block">Login</button> -->
                                            <input type="submit" value="Login" name="login" class="btn btn-dark btn-lg btn-block">
                                        </div>

                                        <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                                        <p class="mb-5 pb-lg-2 text-help" >Don't have an account? 
                                            <a href="./Register-Fatah.php">Register here</a>
                                        </p>
                                        <a href="#" class="small text-muted">Terms of use.</a>
                                        <a href="#" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</body>

</html>