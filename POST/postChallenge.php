<?php
	// 	Check the POST and ensure it's set
	//	Display the selected animal 'count' times

	//	An array of animals. Ensure that they match exactly the name of the image (minus the extension)
	$animals = ["Elephant", "Lion", "Lamb"];

	if (isset($_POST['animal'])) {
		$animal_id = intval($_POST['animal']);
	} else {
		$animal_id = 0;
	}


	if (isset($_POST['count'])) {
		$count = min($_POST['count'], 20);
	} else {
		$count = 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="mvp.css">
	<title>POST Animal Challenge</title>
	<script src="postChallenge.js"></script>
</head>
<body>
	<main>
		<h1>Animal POST Challenge!</h1>
		<h2>Choose an animal from the List!</h2>
		<!-- Change the option text to your animal choices! -->
		<form method="post">
			<select name="animal">
				<option value=0>Elephant</option>
				<option value=1>Lion</option>
				<option value=2>Lamb</option>
			</select>
			<label>Count:</label>
			<input type="range" name="count" id="count" min="1" max="20" step="1" value="1" />
			<output for="count" class="count-output"></output>
			<button type="submit">Submit</button>
		</form>
		<aside>
			<!-- Use PHP Alternative Syntax to provide logic that will display the
				 selected animal 'count' times -->
				<div>
					<?php for ($i=0; $i < $count ; $i++) :?>
						
							<img src="images/<?= $animals[$animal_id] ?>.jpg">
						
					<?php endfor ?>
				</div>	
	
		</aside>
	</main>
</body>
</html>