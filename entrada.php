<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
	<script src="jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<?php 
	require_once("modules/mod_menu/default.php");
	require_once("modules/mod_content/default.php");
	
	//-- mostramos el menu
	displayMenus();
	
	
	//-- funcion para presentar la informacion
	displayInfo($_GET["id"]);

	?>

	
</body>
</html>