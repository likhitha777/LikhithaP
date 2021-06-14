<!DOCTYPE html>
<html>
<head>
	<title>Random Number</title>
</head>
<body>
	<p>Random Number is
		<?php
			$choice = rand(1,100);
			echo $choice;
		?>
	<p>Its Squareroot is
		<?php
			echo sqrt ($choice);
		?>
	</p>
	</p>

</body>
</html>