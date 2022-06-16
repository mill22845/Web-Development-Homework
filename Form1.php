<html>
<body>
<?php
// Set the variable number
$num = $_POST["number"];
if (isset($num) && $num != "")
{
	if(!is_numeric($num))              
    {
		echo "The value you entered is not a number. Please enter a numerical value.";
	}
	else
	{
		if($num < 10)
		{ 
			echo "The number is smaller than 10";
		}
		else if ($num >= 10 && $num <=100 )
		{
			echo "The number is between 10 and 100";
		}
		else
		{
			echo "The number is larger 100";
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