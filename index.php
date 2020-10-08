<?php
//echo
echo"Hello World";
echo'</br>';
echo"This is how we print";
//asigning value
$num1=29;
$num2=21;
$sum=$num1+$num2;
echo '</br>'."The Sum of ".$num1." and ".$num2 ." is " .'</br>'. $sum;

//for constant value
define('pi',3.14);
echo '</br>'.pi;
//conditional
$i=10;
if($i==1){
	echo"The value is correct";
}
else{
	echo"The value is incorrect";
}

//loop
for($j=0; $j<10;$j++){
echo $j.'</br>';
}


$name=["Bijay","Mukesh","Prabhu"];

foreach ($name as $key =>$value) {
	echo "My name is ".$key." ".$value;
}
?>