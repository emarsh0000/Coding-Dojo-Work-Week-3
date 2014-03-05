
<ul>

<?php  

$A = array('two', 23, 'hello!');

function print_lists($array)
{
	for ($i = 0; $i < count($array); $i++) //go through the count by 1.
	{ 
		echo "<li>" . $array[$i] . "</li>"; //this adds <li> with the array value inside.
	}


}
print_lists($A); //this calls it or else nothing will start the function

?>

</ul>