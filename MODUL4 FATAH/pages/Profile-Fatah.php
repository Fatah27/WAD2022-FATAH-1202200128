<?php
require '../config/connector.php';
session_start();
    if (!empty($_SESSION) && $_SESSION['another']) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
          echo "<body>
                <script>
                    alert('kamu belum login!')
                    window.location.replace('./Login-Fatah.php')
                </script>
            </body>";
    }
$query = "SELECT * FROM showroom_EAD";
$result = mysqli_query($conn, $query);

// messages chatcer
if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == "berhasil") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil ditambahkan.
  </div>";
  } else if ($_GET['pesan'] == "gagal") {
    echo "<div class='alert alert-danger' id='alert' role='alert'>
    Error
  </div>";
  } else if ($_GET['pesan'] == "hapus") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil dihapus.
  </div>";
  } else if ($_GET['pesan'] == "edit") {
    echo "<div class='alert alert-success' id='alert' role='alert'>
    Data Berhasil diupdate.
  </div>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Car | Fatah_1202200128</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/index.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="./ListCar-Fatah.php">MyCar</a>
        </div>
        <a href="Add-Fatah.php" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add Car</a>
      </div>
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;"id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $dec['username']; ?>
        </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./Profile-Fatah.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
          </ul>
        </li>
    </div>
  </nav>
  <!-- Nav End -->

  <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://images.unsplash.com/photo-1579778979547-f218ef8f28e8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Ym13JTIwaTh8ZW58MHx8MHx8&w=1000&q=80" alt="login image" class="img-fluid h-100 img-fill"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3"></i>
                                        <span class="h1 fw-bold mb-0">Account</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3">Your account information</h5>
                                    <form>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="username" id="username"
                                                value="<?php echo $dec['username']; ?>" class="form-control" readonly>
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="email" value="<?php echo $dec['email']; ?>"
                                                id="email" class="form-control" readonly>
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="first_name" value="<?php echo $dec['fname']; ?>"
                                                id="first_name" class="form-control" readonly>
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="text" name="lname" value="<?php echo $dec['lname']; ?>"
                                                id="lname" class="form-control" readonly>
                                            <label for="lanme">Last Name</label>
                                        </div>
                                    </form>
                                    <a href="../config/logout.php" class="btn btn-outline-danger">Log out</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    // Hide Alert after 3 seconds function
    const timeout = document.getElementById('alert');
    setTimeout(hideElement, 3000)

    function hideElement() {
      timeout.style.display = 'none'
    }
  </script>
</body>

</html>