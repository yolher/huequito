<?php 
	require_once("modules/mod_menu/default.php");
	require_once("modules/mod_slide/default.php");
	require_once("modules/mod_destacados/default.php");
	require_once("modules/mod_category_front/default.php");
	require_once("modules/mod_category_list/default.php");
	require_once("modules/mod_redes/default.php");
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
	<header>
		<div id="up">
			<div id="varios">
				<div class="grid2">
					<div id="Cmenu">
						<a href="#" class="control" >
							<img src="images/menu.png">
						</a>
					</div>
					<div id="navMovil">
						<?php displayMenus(); ?>
					</div>
					<div id="redes">
						<?php displayRedes(); ?>
					</div>					
				</div>
				<div class="grid2">
					<div id="buscador">
						<?php displaybuscar(); ?>
					</div>
					<div id="resultSearch">
						<div class="close">Cerrar</div>
						<ul></ul>
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
		<section id="banner">    		
    		<?php displayslide(); ?>    			
		</section>

		<section id="categorias">
			<?php displayCategoriesFront(); ?>
		</section>

		<section id="productos">
			<div class="moduletitle">
				<h3>Prodúctos Destacados</h3>
			</div>
			<?php displayProductosDestacados(); ?>	
		</section>
		
	</div>

	<footer>
			<div id="contenidof">
				<div class="contfoo">
					<!-- <h1>SOBRE NOSOTROS</h1> -->
					<a href="index.php">
						<img src="images/logo.png" alt="">
					</a>
				</div>
				
				<div class="contfoo menuF">
					<h2>Menu Principal</h2>
					<div class="menuFooter">
						<?php displayMenus(); ?>
					</div>					
				</div>
				<div class="contfoo categoriasF">
					<h2>CATEGORIAS</h2>
					<div class="menuFooter">
						<?php displayCategoriesList(); ?>
					</div>
				</div>
				<div class="contfoo redesF">
					<h2>SIGANOS</h2>
					<div class="menuFooter">
						<?php displayRedes(); ?>
					</div>	
				</div>
				
			</div>
			<div id="derechosf">
				<div id="dereta">
					
				</div>
			</div>
	</footer>
	<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2c5EF8hgFzOgQwJfHZ5dZ24wT3SzLCqr';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
	
</body>
</html>


