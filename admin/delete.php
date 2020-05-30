<?php
$db = mysqli_connect("127.0.0.1", "root", "", "db_gestionvols");

$id = $_GET['id'];

$query = mysqli_query($db,"DELETE from users where iduser = '$id'");

  if($query == true){
    header("location: admin.php");
  }

 ?>