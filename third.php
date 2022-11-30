<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and Print</title>
</head>
<body>
    <?php
    print("Hello Good Morning");
    echo ("<br>");
    echo " Today is : ".date('Y-m-d'). "<br/>";

    //declre the variable
    $name = "Ramesh ";
    $college = "The British College";
    echo $name . " goes to ".$college. " every day. <br/> ";
    echo "$name goes to $college every day. <br/> ";
    echo '$name goes to $college every day. <br/> ';

    //getting the data types
    echo gettype($name);
    echo "<br>";
    echo gettype($college);

    //arithmetic operations
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    echo "The sum of $num1 and $num2 is ". $num1+$num2. "<br/>";
    echo "The sum of $num1 and $num2 is $num1+$num2 </br>";


    echo "<h1>Use Arithmetic Operator</h1>";
        $loan_amount=500;
        $rateofinterest=3.5;
        $payable=($loan_amount/100)*$rateofinterest;

        echo "Loan: ". $loan_amount."<br>";
        echo "Rate: ".$rateofinterest."%<br>";
        echo "Payable: &pound;".number_format($payable,2);



    ?>
    
</body>
</html>