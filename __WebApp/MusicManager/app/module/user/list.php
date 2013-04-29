<?php

	if(!@include_once ('app/module/admin/connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
	else{

			$requete = $bdd->prepare("SELECT * 
										FROM playlist PL
												JOIN user U ON U.idUser = PL.idUser
										WHERE U.login = :login");
		
			$requete->execute(array('login' => $_SESSION['login'] ));
		
			
		}

?>