<?php
//Declare variables
$payRate = 30;
$hours = 52;
$regWage = 1200;
$lessHourWage = 45;
$moreHourWage =  60;
$hoursOver = $hours - 40;
//Calculate if overtime is needed and how many hours are overworked. 
if ($hours > 40) {
	$hoursOver = $hours - 40;
} else {
//Calculates total pay.
	$totalPay = $hours * $payRate;
}

if ($hoursOver > 10) {
	$overTimePay = $hoursOver * $moreHourWage;
	//Calculates total pay.
	$totalPay = $overTimePay + $regWage;
} else {
	$overTimePay = $hoursOver * $lessHourWage;
	//Calculates total pay.
	$totalPay = $overTimePay + $regWage;
} 
	number_format( $totalPay, 3, '.', '' );

//Loop 5 times
$index = 1;
while ($index <= 5) {
	echo "Your total weekly pay is $totalPay Where, $totalPay is the total weekly pay (regular 40 hr pay + overtime pay)<br>";
	$index++;
}

?>