
<?php 

	for ($i = 0; $i < 101; $i++) //this will run the if/elseif/else 100 times.
	{ 
		$score = rand(50,100);  //this gives a random value to $score that will be between those 2 values.


		if ($score < 70) 
		{
		 	echo "<h1>Your Score: " . $score . "/100" . "</h1>" . "<br>";  //you can add html elements in the php. (h1, h2 are here)
		 	echo "<h2>Your grade is D.</h2>";
		} 
		elseif ($score < 81) //notice you say $score in both parts.
		{
			echo "<h1>Your Score: " . $score . "/100" . "</h1>" . "<br>";
			echo "<h2>Your grade is C.</h2>";
		}
		elseif ($score < 91) 
		{
			echo "<h1>Your Score: " . $score . "/100" . "</h1>" . "<br>";
			echo "<h2>Your grade is B.</h2>";
		}
		else 
		{
		 	echo "<h1>Your Score: " . $score . "/100" . "</h1>" . "<br>";
		 	echo "<h2>Your grade is A!</h2>";
		} 

	}

 ?>
