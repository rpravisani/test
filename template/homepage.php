<?php
include '../core/variables.php';
include '../core/required.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
</head>

<body>
	
	<h1>Homepage</h1>
	
	<h2><?php sayHello(); ?></h2>
	
	<p>Result: <?php echo test(2,4); ?></p>
	
</body>
</html>