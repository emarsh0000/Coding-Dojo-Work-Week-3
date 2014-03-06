<!doctype html>
<html>
	<head>
			<meta charset="utf-8">
			<link rel = "stylesheet" type = "text/css" href = "multiplication.css">
		<title>Multiplication</title>
	</head>
		<body>
			<table>
				<thead>
					<?php

						echo "<tr><td></td>"; //this is because you need a top row of column'ed info and one empty cell (the <td></td>.)

						for ($i = 1; $i < 10; $i++) 
						{ 
							echo "<th>{$i}</th>"; //here is where you add in the info and tell it to be bolded/columns.

						}
						echo "</tr>"; //this encloses all inside the row.
					?>
				
				</thead>
					<tbody>
						<?php 

							for ($i = 1; $i < 10; $i++) 
							{ 	
								echo "<tr><th>{$i}</th>"; //this bolds the first line of info vertially.
								for ($x = 1; $x < 10; $x++) 
								{ 
									echo "<td>" . $x * $i . "</td>"; //this is what physically does the multiplication.
								}
							}
							echo "</tr>"; //this closes the row.
							
							
						?>
						
					</tbody>
			</table>		
		</body>
</html>
