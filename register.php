<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        //collecting the data
        $uname=$_POST['username'];
        $upass=md5($_POST['password']);
        $uemail=$_POST['email'];
        //writing the sql statement
        $sql = "INSERT INTO users(username, password, email)VALUES('$uname', '$upass' , '$uemail')";
        //making the connection
        require("connection.php");
        //executing the query
        $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($qry)
        {
            echo "Data inserted Successfully.";
        }
    }
    ?>
    <form method="post" action="" name="register">
        <fieldset>
            <legend>User Registration</legend>
            <input type="text" name="username" placeholder="Username"/>
            <br/>
            <input type="password" name="password" placeholder="Password" />
            <br/>
            <input type="email" name="email" placeholder="you@domain.com" />
            <br/>
            <input type="submit" name="submit" value="Register"/>
        </fieldset>
    </form>
    <div> Already Registered<a href="login.php">Login</a>
</div>  
</body>
</html>