<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HTML TABLE (with PHP)</title>
	</head>
		<body>
			<table>
				<thead>
					<th>User #</th>    <!--this makes the columns for our table-->
					<th>First Name</th>
					<th>Last Name</th>
					<th>Full Name</th>
					<th>Full Name in upper case</th>
					<th>Length of Name</th>
				</thead>
					<tbody>  <!--what's in our table itself, the info.-->

						
					
						
<?php

// for ($i = 0; $i < count($users); $i++) //go through the count by 1.
// 	{ 
// 		echo "<td>" . $users[$i] . "</td>"; //this adds <option> with the array value inside.
// 	}
// ?>

 <?php

$users = array(
	array('first_name' => 'Michael', 'last_name' => 'Choi'),   //this is the info for our table.
	array('first_name' => 'John', 'last_name' => 'Supsupin'),
	array('first_name' => 'Mark', 'last_name' => 'Guillen'),
	array('first_name' => 'KB', 'last_name' => 'Tonel'),
	array('first_name' => 'Emily', 'last_name' => 'Marsh'),
	array('first_name' => 'Brenden', 'last_name' => 'Brown'),
	array('first_name' => 'Joseph', 'last_name' => 'Su'),
	array('first_name' => 'Nikki', 'last_name' => 'Leung'),
	array('first_name' => 'Hadley', 'last_name' => 'Fellows'),
	array('first_name' => 'Dan', 'last_name' => 'France'),
	array('first_name' => 'Kevin', 'last_name' => 'Lee'),
	array('first_name' => 'Reza', 'last_name' => 'Jannati'),
	array('first_name' => 'Benjamin', 'Tiddle' => 'Tonel'),
	array('first_name' => 'Will', 'last_name' => 'Chambers'),
);



for ($i = 0; $i < count($users); $i++) //this goes through our info for the table piece by piece and unpacks it 
{ 
	if ($i % 5 == 0) //if you didn't need to style stuff, you can take out the if/else and top set of instructions (lines 53-69)
		{ 
			echo "<tr style = 'color: white; background-color: black;'</tr>"; //this gives css straight into html/php format.
			echo "<td>" . ($i + 1) . "</td>";
			$full_info  = '';
			foreach ($users[$i] as $key => $value) 
			{
			echo "<td>" . $value . "</td>";
			$full_info = $full_info . $value . ' ';
			}
			echo "<td>" . $full_info . "</td>";
			echo "<td>" . strtoupper($full_info) . "</td>";
			echo "<td>" . (strlen(trim($full_info)) - 1) . "</td>";
			echo "<tr>";
		}
		else
		{
			echo "<tr>";
			echo "<td>" . ($i + 1) . "</td>";
			$full_info  = '';
			foreach ($users[$i] as $key => $value) 
			{
			echo "<td>" . $value . "</td>";
			$full_info = $full_info . $value . ' ';
			}
			echo "<td>" . $full_info . "</td>";
			echo "<td>" . strtoupper($full_info) . "</td>";
			echo "<td>" . (strlen(trim($full_info)) - 1) . "</td>";
			echo "<tr>";
		}
}



// $i = 1;

// foreach ($users as $list) //this tells the computer to break into the first layer of the array.
// {
// echo "<tr>";  //you do this to encase the td with a tr.
// 	foreach ($list as $key => $value) //this says to now go one layer deeper and now all the info is available.
// 	{
	
// 	echo "<td>" . $i . $value . "</td>"; //this adds <td> with the array value inside.
// 	$i++;

// 	}
// echo "</tr>";
	
// }	

?>

					</tbody>

			
			</table>
		</body>
</html>

