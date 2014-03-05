<?php 
//$user1 = array('first_name' => 'Trey', 'last_name' => 'Villafane');  //make an array w/ multi things at the same time
$users['first_name'] = "Michael"; //this is putting an index into an array
$users['last_name'] = "Choi";

function string_value($array)
 
{
		echo "There are 2 keys in this array: ";

		foreach($array as $key => $value)  //this will go through both values in associative array.
		{
			echo $key . "," . " ";
		}	echo '<br>';
		foreach ($array as $key => $value) 
		{
				
			echo "The value in the key " . $key . " " . $value;
			echo '<br>';
		}
			

}

string_value($users);


 ?>