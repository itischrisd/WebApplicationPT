<html>
	<head>
		<title>PHP Page</title>
	</head>

	<body>
	</body>

	<?php
		if(isset($_GET['message'])){
			if($_GET['message'] == 'okay'){
			echo '<h1>Server Software: '.$_SERVER['SERVER_SOFTWARE'].'</h1>';
			echo '<h1>User Agent: '.$_SERVER['HTTP_USER_AGENT'].'</h1>';
			}
		}
	?>
</html>
