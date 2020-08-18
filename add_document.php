<?php


  include 'koneksi.php';
 // $statusMsg = '';

  $no_doc = $_REQUEST['no_doc'];
  $nama_project = $_REQUEST['nama_project'];
  $nama_doc = $_REQUEST['nama_doc'];
  $detail = $_REQUEST['detail'];
  $file = $_REQUEST['file'];
  

  $sql = "INSERT INTO document VALUES ('$no_doc','$nama_project', '$nama_doc', '$detail', '$document');";

  $query = mysqli_query($conn,$sql);
  if ($query) {
    echo "<script> alert('Document has been added');</script>";
    echo "<script> location.href='manage_document.php'</script> ";
  } else {
    echo "<script> alert('Document can't be added); </script> ";
    echo "<script> location.href='manage_document.php'</script> ";
  }





?>
