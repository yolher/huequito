<?php 
	require_once("modules/mod_menu/default.php");
	require_once("modules/mod_slide/default.php");
	require_once("modules/mod_productos/default.php");
	require_once("modules/mod_content/default.php");
	//-- trae el nombre de la pagina
	$pagina = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Huequito :: <?php echo ucwords($pagina); ?></title>
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
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
<body class="internal <?php echo $pagina; ?>" id="Inicio">
	<header>
		<div id="up">
			<div id="varios">
				<div class="grid2">
					
					<div id="Cmenu">
						<a href="#" class="control" >
							<img src="images/menu.png">
						</a>
					</div>
					<div id="redes">
						<ul>
							<li><img src="images/contacto.png" alt=""></li>
							<li><img src="images/correo.png" alt=""></li>
							<li><img src="images/facebook.png" alt=""></li>
						</ul>
					</div>
					
				</div>
				<div class="grid2">
					<div id="buscador">
						<input id="into" type="text" placeholder="Buscar" class="hasPlaceholder">
						<input type="button" id="boton" value="Buscar">
					</div>
				</div>
				
			</div>
			
		</div>
			<div id="lnb">
				<div id="logo">
					<a href="index.php">
						<img src="images/logo.png" alt="">
					</a>
				</div>
				<nav >
					<?php displayMenus(); ?>
				</nav>
				
			</div>
	</header>

	<div id="container">
		<section id="contenido">
			<?php displayInfo($pagina); ?>
		</section>

		<section id="right">
		
		</section>
	</div>

	<footer>
			<div id="contenidof">
				<div class="contfoo">
					<h1>SOBRE NOSOTROS</h1>
					<img src="images/logo.png" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nulla.</p>
					<div id="mas">
					</div>
				</div>
				<div class="contfoo">
					<h2>CATEGORIAS</h2>
					<ul>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
					</ul>
				</div>
				<div class="contfoo">
					<h2>INFORMACION</h2>
					<ul>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
						<li><img src="images/separador.png" alt=""><p>123123</p></li>
					</ul>
				</div>
				<div class="contfoo">
					<h2>SIGANOS</h2>
					<ul id="redesfo">
					<li><img src="images/facebookf.png" alt=""><p>Facebook</p></li>
					<li><img src="images/twitterf.png" alt=""><p>Twitter</p></li>
					</ul>
				</div>
				
			</div>
			<div id="derechosf">
				<div id="dereta">
					
				</div>
			</div>
	</footer>

	
</body>
</html>