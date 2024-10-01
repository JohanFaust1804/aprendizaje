<?php
include("model/connection.php");

$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="container">
        <div class="users-form">
            <h1>Crear Usuario</h1>
            <form action="controller/insert.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="lastname" placeholder="Apellidos" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input type="email" name="email" placeholder="Email" required>

                <input type="submit" value="Agregar">
            </form>
        </div>

        <div class="users-table">
            <h2>Usuarios Registrados</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['lastname'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td>
                                <a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a>
                                <a href="controller/delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
