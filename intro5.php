 <?php

 $A = array(2, 4, 10, 16);

 function multiply($array)
{
	for ($i = 0; $i < count($array); $i++) 
	{ 
		$array[$i] = $array[$i] * 5;
	}
		return $array;
}

 ?>
