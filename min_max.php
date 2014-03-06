<?php 

$arrayMinMax = array(22, 4, 80, 56);

function get_max_and_min($myarray) //
{
	$current_min = $myarray[0];
	$current_max = $myarray[0];

	for ($i = 0; $i < count($myarray); $i++) 
	{ 
		if ($myarray[$i] > $current_max) 
		{
			$current_max = $myarray[$i];
		}
		if ($myarray[$i] < $current_min)
		{
			$current_min = $myarray[$i];
		}
		// echo $current_max . " " . $current_min;  <--This will run this once just to see what happens earlier on.
		// die;
	}
	return [$current_min, $current_max];
}

var_dump(get_max_and_min($arrayMinMax));  //This is a way to pass anything to insert it in the function.
var_dump(get_max_and_min([-13, -25, -17])); //It can also pass in actual integers.


 ?>