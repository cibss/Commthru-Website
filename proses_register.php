<?php

    include("koneksi.php");

    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["pass"];

    $sql = "INSERT INTO account values('$email','$username','$password');";

    $query = mysqli_query($conn,$sql);
    if ($query){
        echo "<script> alert('Register Success');</script>";
        echo "<script>location.href='index.php'</script>";
    } else {
        echo "<script> alert('Register Failed');</script>";
    }

 
?>