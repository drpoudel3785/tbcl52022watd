<?php
$prices = array('tshirt'=>9.99, 'cap'=>4.99, 'mug'=>6.99);
echo $prices['cap'];
echo "<br/>";
foreach($prices as $i=>$v){
    echo "The price for $i is $ $v <br/>";
}

$price=2.50;
echo "<table border=\"1\" cellpadding=4 cellspacing=4 width=300px>";
echo "<tr><th>Qty</th><th>Price</th></tr>";
for($i=1;$i<=10;$i++){
    echo "<tr>
            <td>$i</td>
            <td>".number_format($i*$price,2)."</td>
         </tr>";
}
echo "</table>";
?>
<?php
echo "<table border=1>";
echo "<tr>";
for($i=1;$i<=100;$i++)
{
    if($i%10==0)
    {
        echo "<td>$i</td></tr><tr>";
    }
    else{
    echo "<td>$i</td>";
    }
}
echo "</tr>";
echo "</table>";
?>