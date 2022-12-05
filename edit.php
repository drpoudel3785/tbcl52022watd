<?php
//checking id and action is set or not
if(isset($_GET['id'])&&isset($_GET['action']))
{
    $editid=$_GET['id'];
    $sql = "SELECT * from users where id=$editid";
    include("connection.php");
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while($row=mysqli_fetch_assoc($qry))
    {
        $eid=$row['id'];
        $eusername=$row['username'];
        $eemail=$row['email'];
        $erole=$row['role'];
        $eisverified=$row['isverified'];
        $estatus=$row['status'];
    }
    //creating edit form
    echo "<form method=post action=''>";
    echo "<fieldset><legend>Edit $eusername</legend>";
    echo "<label>USername</label>";
    echo "<input type='text' name='username' value='$eusername'>";
    echo "<br/>";
    echo "<label>Password</label>";
    echo "<input type='password' name='password'>";
    echo "<br/>";
    echo "<label>Email</label>";
    echo "<input type='email' name='email' value='$eemail'>";
    echo "<br/>";
    echo "<label>Role</label>";
    echo "<input type='text' name='role' value='$erole'>";
    echo "<br/>";
    echo "<label>isVeriried</label>";
    echo "<input type='text' name='isverified' value='$eisverified'>";
    echo "<br/>";
    echo "<label>Status</label>";
    echo "<input type='text' name='status' value='$estatus'>";
    echo "<br/>";
    echo "<input type='submit' name='edituser' value='Update...'>";
    
    echo "</fieldset>";
    echo "</form>";
}
else
{
    header("location:listusers.php");
}
?>