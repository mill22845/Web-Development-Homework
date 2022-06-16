<html>
<body>
<?php
// Set the variable number
$num1 = $_POST["numberOne"];
$num2 = $_POST["numberTwo"];
if ((isset($num1) && $num1 != "") && (isset($num2) && $num2 != ""))
{ 
		if(!is_numeric($num1))              
		{
			echo "The value you entered is not a number. Please enter a numerical value.";
		}
		elseif(!is_numeric($num2))
		 {
			echo "The value you entered is not a number. Please enter a numerical value.";
		}
		else
		{
			$sum = $num1 + $num2;
			if($sum % 2 == 0)
			{ 
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";
			}
			else 
			{
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";
				echo "The sum of the two values is $sum.<br>";

			}
		
		}
}

else
{
	echo "Please enter a number";
}
?>
</body>
</html>