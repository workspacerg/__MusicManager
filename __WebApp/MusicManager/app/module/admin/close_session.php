<?php

		//Fermeture de session
			$_SESSION['is_connect'] = false;
			$_SESSION['login'] = "";
			$_SESSION['email'] = "";	 	
			$_SESSION['nom'] = "";
			$_SESSION['prenom'] = "";

			$_SESSION = array();
			session_destroy();
?>

<head>
	<title>Disconnect</title>
	<meta http-equiv="refresh" content="0;	URL=../index.php">
</head>
