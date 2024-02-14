<?php
	// 	Check the GET and ensure it's set
	//	If a count has been supplied, display the selected animal count times

	//	An array of animals to be completed. 
	// 	Ensure that they match exactly the name of the image (minus the extension)
//Challenge tried without count! 
	$animals = [ "Elephant", "Lion", "Lamb" ];

	if (isset($_GET['animal_id'])) {
		$animal_id = intval($_GET['animal_id']);
	} else {
		$animal_id = 0;
	}

	




	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="mvp.css">
	<title>GET Animal Challenge</title>
</head>
<body>
	<main>
		<h1>Animal GET Challenge!</h1>
		<h2>Choose an animal by changing its relative id in the GET Parameter (for example: <a href="?animal_id=2">Hornet</a>)</h2>
		
		<!-- Change the animal names to your choices! -->
		<table>
			<tr>
				<th>Animal ID</th>
				<th>Animal</th>
			</tr>
			<tr>
				<td>0</td>
				<td>Orca</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Sloth</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Hornet</td>
			</tr>
		</table>

		<div>
			
		
		</div>
			
			<img src="images/<?= $animals[$animal_id]?>.jpg">

			
		<aside>
			<!-- Use PHP Alternative Syntax to provide logic that will display the
				 selected animal 'count' times -->
		</aside>
	</main>
</body>
</html>