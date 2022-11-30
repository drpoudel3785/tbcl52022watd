<?php

   //check the form is submitted or not
   //if(isset($_POST['submit'])){
    if($_SERVER['REQUESET_METHOD']=='POST'){

    if(isset($_POST['confirm']))
    {
    //capturing the forms data
    $username = $_POST["uname"];
    $password = $_POST["upass"];
    $email = $_POST["uemail"];
    $dd = $_POST["dd"];
    $mm = $_POST["mm"];
    $yy = $_POST["yyyy"];
    $gender = $_POST["gender"];
    $message = $_POST["message"];
    $confirm = $_POST["confirm"];
    $photo = $_FILES["photo"]["name"];

    echo "<h1>Your information is as follows</h1>";
    echo "Username = $username";
    echo "<br/>";
    echo "Password = $password";
    echo "<br/>";
    echo "Email = $email";
    echo "<br/>";
    echo "DOB = $dd $mm $yy";
    echo "<br/>";
    echo "Gender= $gender";
    echo "<br/>";
    echo "Selected Course are <br/>";
    foreach($_POST["course"] as $ccourse)
    {
        echo $ccourse . "&nbsp;";
    } 
    echo "<br/>";
    echo "Message = $message";
    echo "<br/>";
    echo "Photo= $photo";
    echo "<br/>";
    echo "Confirm= $confirm"; 
   }
else{
    header("Location:signup.php?msg=You Must Confitm before submitting the frimn");  

}
   }
   else{
       header("Location:signup.php");
   }
?>