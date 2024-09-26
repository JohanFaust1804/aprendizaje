<?php
include("model/connection.php");

$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  <title>user crud</title>
</head>
<body>
    <div class="container">
      <div class="user-form">
        <h1>Create user</h1>
          <form action="controller/insert.php" method="POST"></form>
            <input type="text", name="nombre", placeholder="Name" required>
            <input type="text", name="lastname", placeholder="Lastname">
            <input type="text", name="email", placeholder="Email">
            <input type="text", name="pass", placeholder="Password">
            <button type="submit">Create</button>
          </form>
      </div>
      <div class="user-list">
        <h1>Users</h1>
        <table>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>action</th>
          </tr>
          <?php while($row = mysqli_fetch_array($query)){ ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['pass']; ?></td>
            <td>
              <a href="controller/delete.php?id=<?php echo $row['id']; ?>">delete</a>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>    
</body>
</html>