<?php


  include 'koneksi.php';
 // $statusMsg = '';

  $no_project = $_REQUEST['no_project'];
  $nama_project = $_REQUEST['nama_project'];
  $detail = $_REQUEST['detail'];
  

  $sql = "INSERT INTO project VALUES ('$no_project','$nama_project', '$detail');";

  $query = mysqli_query($conn,$sql);
  if ($query) {
    echo "<script> alert('Project has been added');</script>";
    echo "<script> location.href='manage_project.php'</script> ";
  } else {
    echo "<script> alert('Project can't be added); </script> ";
    echo "<script> location.href='manage_project.php'</script> ";
  }





?>
