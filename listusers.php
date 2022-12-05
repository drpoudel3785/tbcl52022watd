<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List all uers</title>
</head>
<body>
    <?php
    
    //writing the sql query
    $sql = "SELECT * FROM users ORDER BY id DESC";
    //making connction
    require("connection.php");
    //executing the query
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    //counting the records
    $count=mysqli_num_rows($qry);
    //printing the records
    echo "<h5> We have $count Records.</h5>";
    echo "<a href=register.php>Add User</a>";
    echo "<table border=1 cellpadding=5 cellspacing=5>";
    echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Email</th><th>Role</th><th>isVerrified</th><th>Status</th><th>Action</th></tr>";
    while($row=mysqli_fetch_array($qry))
    {
        $id=$row['id'];
        echo "<tr><td>".$row['id']."</td>";;
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['role']."</td>";
        echo "<td>".$row['isverified']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td> <a href=edit.php?id=$id&action=edit>EDIT</a> |  <a href=delete.php?id=$id&action=delete>DELETE </a></td>";
        echo "</tr>";
    }
    ?>
    
</body>
</html>