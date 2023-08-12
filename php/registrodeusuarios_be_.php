<?php
include './CONEXION_BE_.PHP';

$username = $_POST['username'];
$password = $_POST['password'];



$query = "INSERT INTO users(usuarios, password)
          VALUES('$username','$password')";




$ejecutar = mysqli_query($conexion, $query);







?>
