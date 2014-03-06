<?php 

function counter()
 
{
		for($i = 1; $i < 2001; $i++)   //iterated by 1
		{
			echo "Number is " . $i . "." . "  ";  //phrasing to make sentence and insert values.
			if (($i % 2) == 0) //modulo for if and else statement. You need if/else because odd and even depend on answer.
			{  
				echo "This is an even number.";
			}	
			else 
			{
				echo "This is an odd number.";
			}	
			echo '<br>';  //breaks the line, and it's outside the if else so no matter what it happens.

		}
	
}
	counter();   //don't FORGET TO CALL IT!
?>