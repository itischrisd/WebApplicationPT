<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP  exercise</title>
    </head>

    	<body>
	<form method="POST">
	Name:
	<input type="text" name="name">
	<br>
	<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if (empty($_POST["name"])) {
		echo("Name is required");
		} else {
		echo($_POST["name"]);
		}
	?>
	</body>
</html>
