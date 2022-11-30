<?php
$md5pass = md5("Ram");
echo $md5pass;
echo "<br>";

$sha1pass = sha1("Ram");
echo  $sha1pass;
echo "<br>";


function addNum($num1, $num2){
    $sum =  $num1 + $num2;
    return $sum;
}

$test1 =  addNum(1,2);
echo $test1."<br>";
$test2 =  addNum(2,3);
echo $test2."<br>";

?>
