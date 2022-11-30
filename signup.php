<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP</title>
</head>
<body>
    <form method="POST" name="Signup" action="process.php" enctype="multipart/form-data">
    <fieldset><legend>Signup</legend>
    <input type="text" name="uname" placeholder="Username" /><br/>
    <input type="password" name="upass" placeholder="Password" /><br/>
    <input type="email" name="uemail" placeholder="you@domain.com" /><br/>
    DOB <select name="dd" size="1">
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="31">31</option>
    </select>
    <select name="mm" size="1">
        <option value="Jan">Jan</option>
        <option value="Feb">Feb</option>
        <option value="Mar">Mar</option>
        <option value="Dec">Dec</option>
    </select>
    <select name="yyyy" size="1">
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
    </select>
    <br/>
    Gender <input type="radio" name="gender" value="Male" checked/>Male 
    <input type="radio" name="gender" value="Female" />Female 
    <input type="radio" name="gender" value="Other" />Other 
    <br/>

    Course<input type="checkbox" name="course[]" value="php"/>PHP
    <input type="checkbox" name="course[]" value="MySQL"/>MySQL
    <input type="checkbox" name="course[]" value="Java"/>Java
    <input type="checkbox" name="course[]" value="Asp"/>Asp
    <br/>
    Photo<input type="file" name="photo"/ ><br/>
    Message <textarea name="message" rows="5" cols="40" >
    </textarea>
    <br/>
    <input type="checkbox" name="confirm" value="iagree">I Agree to submit this data <br/>
    <input type="submit" name="submit" value="Register"/>
    <input type="reset" name="reset" value="Clear"/>
    </fieldset>
    </form>
    
</body>
</html>