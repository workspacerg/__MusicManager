<?php 
session_start(); // début de session

	if (!isset($_SESSION['is_connect'])) {
	 	$_SESSION['is_connect'] = false;
	 } 

$context = array();

function render_action($route) {
	$actionFile = __DIR__.'/app/module/'.$route.'.php';	
	if (file_exists($actionFile))
		include ($actionFile);
	$viewFile = __DIR__.'/app/view/'.$route.'.php';
	$out = null;
	if (file_exists($viewFile) && !isset($context['no_render']))
	{
  		ob_start();
  		include ($viewFile);
  		$out = ob_get_contents();
  		ob_end_clean();
	}	
 	return $out;
}
$action = isset($_GET['action']) && "" != $_GET['action'] ? $_GET['action'] : 'index/index';
$out = render_action($action);


$keyStyle  = "style= \" background: url('/MusicManager/res/styles/default/Icones/key.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\"";

if (null != $out)
{
?>	

<!-- header part -->
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  type="text/css" href="/MusicManager/res/styles/default/Version1.css"/>
	<link href='http://fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster+Two|Geo' rel='stylesheet' type='text/css'>
</head>


<body>

		<?php 
		if (isset($_SESSION['is_connect']) && $_SESSION['is_connect'] == true) { ?>

				<header>
					<section id="header_nav_titre">
						<a href="/MusicManager/user/musique"> <h1> Music</h1> <h1>Manager</h1>  </a>
					</section>

					<section id="header_nav">
						<p> <a href="/MusicManager/user/musique"> Albums </a> / 
							<a href="/MusicManager/user/list"> Play list </a> / 
							<a href="/MusicManager/user/user"> Préférence </a> / 
							<a href="/MusicManager/admin/close_session"> Deconexion </a> </p>
					</section>
				</header>
		
		<?php
		}
		else{
		?>
				<header>
					<section id="header_nav_titre">
						<a href="/MusicManager/index/index"> <h1> Music</h1> <h1>Manager</h1>  </a>
					</section>

					<section id="header_nav_connect">
						<!-- <p> Connexion </p> -->
						<form name="form_connect_header" id="form_connect_header" method="post" action="">		
							<input 	class="box" 	name="login" 	type="text" 	placeholder="login" AUTOCOMPLETE=OFF	required >
							<input 	class="box" 	name="password" type="password" placeholder="password" AUTOCOMPLETE=OFF required <?php echo $keyStyle ?>>	<br>
							<button class="btn_nav_connect"	type=submit 	value=Valider >Connexion</button>	
						</form>
					</section>
				</header>
		<?php
		}
		?>


<!-- content part -->
	<?php echo $out?>

<!-- footer part -->


		<!-- footer -->
		<footer>

				<div id="footer_content">
					<section class="footer_content_part1">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</section>
					<section class="footer_content_part2">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</section>
					<section class="footer_content_part3">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</section>
				</div>

		</footer>

</body>
</html>
<?php
}
?>
