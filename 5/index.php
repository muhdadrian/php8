<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>
		<!-- no reason to put semicolon if only a line -->
		<?php echo 'Hello World' ?>
		<?= '<br>' ?>
		<?= 'Hello World' ?>
		<?= '<br>' ?>
		<?php
			$x = 10;
			$y = 5;

			echo $x . ', ' . $y;
		?>
	</h1>

	<p>my first paragraph.</p>

	<?php
		echo '<p>' . $x . ', ' . $y . '</p>';
	?>

	<?php
	// comment 1
	# comment 2
	/*
	multi-line
	*/
	?>
		
</body>
</html>