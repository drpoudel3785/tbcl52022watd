<?php
//checking id and action is set or not
if(isset($_GET['id'])&&isset($_GET['action']))
{
    $delid=$_GET['id'];
    //SQL Statement for Delete
    $sql = "DELETE FROM users WHERE id=$delid";
    //making connection
    include_once("connection.php");
    //executing query
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry)
    {
        header("location:listusers.php");
    }
}
else
{
    header("location:listusers.php");
}
?>