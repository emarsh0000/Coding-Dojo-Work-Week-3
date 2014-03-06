<!doctype html>
<html>
	<head>
			<link rel = "stylesheet" type = "text/css" href = "checkerboard.css">
			<meta charset="utf-8">
		<title>HTML Checkerboard</title>
	</head>
		<body>
			<table>
				<thead>
					<th></th>
				
				</thead>
					<tbody>
						<?php

							for ($i = 1; $i < 9; $i++)
							{
								
									echo "<tr>";  //this starts the row.
								for ($x = 1; $x < 9; $x++) 
								{ 	
									if (($x + $i) % 2 == 0) 
									{
										echo "<td style = 'background-color: black;'></td>";
									}
									else
									{
										echo "<td style = 'background-color: red;'></td>";
									}
								}	
									echo "</tr>"; //this closes the row.
							
							
								
							}
								
								
	

							?>

					</tbody>
			</table>		
		</body>
</html>
