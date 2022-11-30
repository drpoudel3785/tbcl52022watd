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
        //capturing the image name
        $uimage=$_FILES["upload"]["name"];
        $usize=$_FILES['upload']['size'];
        $utype=$_FILES['upload']['type'];
        $utmpname=$_FILES['upload']['tmp_name'];
        $ulocation="uploads/".$uimage;

       
        if($utype=="image/jpeg" || $utype=="image/jpg" || $utype=="image/png" || $utype=="image/gif")
        {
        if(!empty($cname) )
        {
            //SQL 
            $sql ="INSERT INTO category(cname, description, thumbimg)VALUES('$cname', '$description','$uimage')";
            //making connection
            include("connection.php");  
            //executing Query
            $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
            //giving decision 
            if($qry)
            {
                if(move_uploaded_file($utmpname, $ulocation))
                    echo "File Uploaded";
                else
                    echo"unable to upload the file";
                echo "$cname inserted Successfully";
            }
        }
        else
        {
            echo "Please fill Category Name";
        }
    }
    else{
        echo "You must upload images only";
    }
    }
    ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <fieldset>
            <legend>
                Add Category
            </legend>
            <label>Category Name</label>
            <input type="text" name="cname" />
            <label>Description</label>
            <input type="text" name="description"/>
            <br/>
            <input type="file" name="upload"/>
            <br/>
            <input type="submit" name="addcategory" value="Add"/>
        </fieldset>
    </form>

<?php
include("categorydisplay.php");

?>
    
</body>
</html>