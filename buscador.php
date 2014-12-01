<?php 
	require_once("modules/mod_menu/default.php");
	require_once("modules/mod_slide/default.php");
	require_once("modules/mod_productos/default.php");
	require_once("modules/mod_category_front/default.php");
	require_once("modules/mod_buscador/default.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Huequito</title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mediaQueries.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin' rel='stylesheet' type='text/css'> 
	<link id="page_favicon" href="favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="css/normalize.css">
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/prefixfree.min.js"></script>
	<script src="js/jquery.slides.min.js"></script>
	<script src="js/script.js"></script>
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/stylebanner.css">    
</head>


<body class="home" id="Inicio">
<div class="grid2">
					<div id="buscador">
						<form action="gestion/controller/buscador_controller.php" method="POST">
						<input name='into' id="into" type="text" placeholder="Buscar" class="hasPlaceholder">
						<input type="submit" id="boton" value="Buscar">
						</form>
					</div>
				</div>

				<div id="resultado">
					<?php displaybuscar(); ?>
				</div>
	

	
</body>
</html>


