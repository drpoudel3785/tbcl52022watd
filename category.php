<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("connection.php");
    if(isset($_POST['addcategory']))
    {
        // collecting the forms data
        $cname=trim($_POST['cname']);
        $description=trim($_POST['description']);
        if(!empty($cname))
        {
            //SQL 
            $sql ="INSERT INTO category(cname, description)VALUES('$cname', '$description')";
            //making connection
            include("connection.php");  
            //executing Query
            $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
            //giving decision 
            if($qry)
            {
                echo "$cname inserted Successfully";
            }
        }
        else
        {
            echo "Please fill Category Name";
        }
    }
    ?>
    <form method="POST" action="">
        <fieldset>
            <legend>
                Add Category
            </legend>
            <label>Category Name</label>
            <input type="text" name="cname" />
            <label>Description</label>
            <input type="text" name="description"/>
            <input type="submit" name="addcategory" value="Add"/>
        </fieldset>
    </form>

<?php
include("categorydisplay.php");

?>
    
</body>
</html>