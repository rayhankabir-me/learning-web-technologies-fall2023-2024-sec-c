<?php

    require_once('../model/userModel.php');

    $users = getUsers();


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
</head>
<body>
    <h2>Welcome to Profile</h2>

    <h2>All Users</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>User name</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Date of Birth</td>
            <td>Action</td>
        </tr>
        <?php 

          while($data = $users->fetch_assoc()) {

            ?>

        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['gender']; ?></td>
            <td><?php echo $data['date_of_birth']; ?></td>
            <td>
                <a href="edit_user.php?id=<?=$data['id']?>"> EDIT </a> |
                <a href="delete_user.php?id=<?=$data['id']?>"> DELETE </a>
            </td>
        </tr>

            <?php
          }
        
        ?>
    </table>
</body>
</html>