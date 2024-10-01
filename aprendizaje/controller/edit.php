<?php

include "../model/connection.php";
$con = connection(); 

$id=$_POST=['id'];
$nombre=$_POST=['nombre'];
$lastname=$_POST=['lastname'];
$username=$_POST=['username'];
$pass=$_POST=['pass'];
$email=$_POST=['email'];

$sql="UPDATE users SET nombre='$nombre', lastname='$lastname', username='$username',  pass='$pass', email='$email' WHERE id='$id'";
$query =mysqli_query($con,$sql);

if($query){
  Header("Location: ../index.php");
}else{

}

?>