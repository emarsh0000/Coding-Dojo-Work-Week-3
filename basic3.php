
<?php 

	$headcount = 0;  //this is outside the statement so it doesn't reset to 0 each time.
	$tailcount = 0;

	for ($i = 1; $i < 5001; $i++) //this will run the if/elseif/else 5000 times.
	{ 
		$coinflip = rand(0, 1);  //this gives a random value to $score that will be between those 2 values.

		echo "<p>Attempt # " . $i . ": Throwing a coin...</p>";  //you can add html elements in the php. (p is here)

		if ($coinflip <= 0.5) 
		{
			$headcount = $headcount + 1; //this is so it will keep adding 1 every time it happens.
		 	
		 	echo "<p>It's a head!</p>";
		} 
		else 
		{
			$tailcount = $tailcount + 1;

		 	echo "<p>It's a tail!</p>";
		}
		echo "<p>Got" . " " . $headcount . " " . "head(s) so far and" . " " . $tailcount . "  " . "tail(s) for far</p>";
		
		
	}

 ?>