<?php
    
    session_start();

    include ("koneksi.php");
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM staff WHERE username='$username' AND password='$password'; ";

        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
         if ($count==1) {
            $_SESSION['idlogin'] = $username;
            echo "<script>alert('Login Success');</script>";
            echo "<script>location.href='home_staff.php'</script>";
        } else {
            echo "<script>alert('Login Failed');</script>";
            echo "<script>location.href='login_staff.php'</script>";
        } 
    }
?>