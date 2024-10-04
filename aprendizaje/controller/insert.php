<?php
include('../model/connection.php');
$con = connection();

$nombre = $_POST['nombre'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$sql = "INSERT INTO users (nombre, lastname, username, pass, email) VALUES('$nombre', '$lastname', '$username', '$pass', '$email')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: ../index.php");
} else {
    echo "No se pudo insertar el registro";
}    