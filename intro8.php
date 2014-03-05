<?php 

$array = array(); //this is an empty array

for ($i = 1; $i < 2000001; $i = $i + 2)  //starting with 1 until this is no longer true (2,000,001) and iterate by 2.
{
	$array[] = $i;  //this means each time it will add the value ($i) into the array.
}

      var_dump($array); //because you can't 'echo' an array.
 ?>