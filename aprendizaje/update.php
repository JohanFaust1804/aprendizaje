<?php
include "model/update.php";

$con = connection();
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";

$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <title>Edit users</title>
</head>

<body>
  <div class="users-form"></div>
  <form action="controller/edit.php" method="post">
    <input type="hidden" name="id" value="<? $row = ['id'] ?>">
    <input type="text" name="nombre" placeholder="Nombres" value="<?= $row = ['nombre'] ?>">
    <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row = ['lastname'] ?>">
    <input type="text" name="username" placeholder="Username" value="<?= $row = ['username'] ?>">
    <input type="text" name="pass" placeholder="password" value="<?= $row = ['pass'] ?>">
    <input type="text" name="email" placeholder="Email" value="<?= $row = ['email'] ?>">

    <input type="submit" value="Actualizar">
  </form>
  <div>

</body>

</html>