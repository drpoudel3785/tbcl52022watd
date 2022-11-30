<h1>List All Category</h1>
<?php
$sql = "SELECT * FROM category ORDER BY id DESC";
include("connection.php");
$qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
$count=mysqli_num_rows($qry);
if($count>=1){
    while($row=mysqli_fetch_array($qry))
    {
        echo $row['id']. " ";
        echo $row['cname']. " ";
        echo $row['description']. " ";
        echo $row['status']. " ";
        echo  "<br/> ";
    }
}
?>