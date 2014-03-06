

<select>

<?php 

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

for ($i = 0; $i < count($states); $i++) //go through the count by 1.
	{ 
		echo "<option>" . $states[$i] . "</option>"; //this adds <option> with the array value inside.
	}

 ?>

</select>



<select>

<?php 

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

foreach ($states as $key => $value) 
{

	echo "<option>" . $value . "</option>"; //this adds <option> with the array value inside.
	
}

 ?>

</select>

<select>

<?php 

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

array_push($states, 'NJ', 'NY', 'DE');

foreach ($states as $key => $value) 
{
	echo "<option>" . $value . "</option>"; //this adds <option> with the array value inside.
	
}

 ?>

</select>