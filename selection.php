<?php
echo date("l, d F Y");
echo "<br>";
date_default_timezone_set("Asia/Kathmandu");
echo date("h:i:s A");
echo "<br>";
$day=date("l");

if($day=="Saturday" || $day=='Sunday'){
    echo "ITs holiday";
}
else if($day=='Friday'){
    echo "ITs good friday";
}
else{
    echo "Its just regular college days.";
}

switch($day)
{
    case 'Saturday':
    case 'Sunday':
        {
            echo"ITs holiday";
            break;
        }
    case 'Friday':
        {
            echo "Its good friday";
            break;
        }
    default:
    {
        echo "Its just regular college days";
        break;
    }

}