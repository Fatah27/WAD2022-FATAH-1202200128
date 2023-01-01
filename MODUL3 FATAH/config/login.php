<?php
    // include "./headers.php";
    session_start();
    if (empty(['user'])) {
        echo "<body>
            <script>
                alert('Akun tidak terdaftar ! mohon buat akun terlebih dahulu')
                window.location.replace('../pages/Login-Fatah.php')
            </script>
        </body>";
    }
    $dec = json_decode($_COOKIE['user'], true);
    $get_uname = $_POST['username'];
    $get_pwd = $_POST['pwd'];

    // print_r($dec);

    // echo '<br>';
    // echo "df : " . in_array('seminar6', $dec);
    // echo "df : " . in_array('bintang2131005', $dec);
    function set_session() {
        global $get_uname, $dec;
        session_start();
        $_SESSION['username'] = $get_uname;
        $_SESSION['another'] = json_encode($dec);
        $_SESSION['name'] = $dec['fname'] . " " . $dec['lname'];
        setcookie('user', json_encode($dec));
    }

    if (isset($_POST['login'])) {
        if (in_array($get_uname, $dec) && in_array($get_pwd, $dec)) {
            set_session();
            header('Location: ../pages/ListCar-Fatah.php');
        }
    }
    
?>

