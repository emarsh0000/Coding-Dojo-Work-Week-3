<?php
session_start();

date_default_timezone_set('America/Los_Angeles');

if(!isset($_SESSION['gold']))
{
	$_SESSION['gold'] = 0;
}

if(empty($_SESSION['log'])) $_SESSION['log'] = array();

function change_gold($num1, $num2, $location)
{
	$num = rand($num1, $num2); //number will be = to whatever random number comes out.
	$date = date("F j, Y, g:i a"); //this makes $date = time stamp.
	$_SESSION['gold'] += intval($num);
	if ($num < 0) 
	{
		array_push($_SESSION['log'], "<span style = 'color: red;'>You entered a {$location} and lost {$num} gold coins {$date}</span><br>");
		
		
	}
	else
	{
		array_push($_SESSION['log'], "You entered a {$location} and earned {$num} gold coins {$date}<br>");
		

	}	

}

foreach ($_POST as $key => $value) 
{
	switch ($value) {
		case "farm":
			change_gold(10, 20, "farm"); //this is the two money value perameters and the name for the function.
			break;
		case "cave":
			change_gold(5, 10, "cave");
			break;
		case "house":
			change_gold(2, 5, "house");
			break;
		case "casino":
			change_gold(-50, 50, "casino");
			break;
		case "reset": //this will set your reset button to start at 0 whenever pressed.
			session_destroy(); //when reset is pressed, number remembered by SESSION is gone.
			break;
		
	}
}




header('Location: indexninja.php'); //keep this at the bottom so that at the end it will revert back to other page.



?>