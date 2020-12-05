<html>
	<head>
		<title>Sterilize-XSS</title>
	</head>

	<body>
	</body>

	<?php
		$firstname = htmlentities($_GET['firstname']);
		$lastname = htmlentities($_GET['lastname']);
		echo "<h1>Hello </h1>".$firstname." ".$lastname.", have a nice day!"
	?>
</html>
