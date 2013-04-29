<?php

$keyStyle  = "style= \" background: url('/MusicManager/res/styles/default/Icones/key.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\"";
					


	 if (isset($_POST['login']) && isset($_POST['password'])) {
		
		if(!@include_once ('app/module/admin/connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
		else{

			$requete = $bdd->prepare(" SELECT Login, Nom, Prenom, Mail FROM user WHERE Login = :login AND Pswd= :password ");

			$requete->execute(array( 'login' => $_POST['login'], 'password' => $_POST['password'])) ;

			$test_connect = $requete->fetch();

			$requete->closeCursor(); 

				if (!$test_connect['Login']=='') {

					$_SESSION['is_connect'] = true;
					$_SESSION['login'] 	= $test_connect['Login'];
					$_SESSION['email'] 	= $test_connect['Mail'];	 	
					$_SESSION['nom'] 	= $test_connect['Nom'];
					$_SESSION['prenom'] = $test_connect['Prenom'];
					//echo "Connexion OK";
				}
				else
				{
					//echo "Connexion fail";
					$_SESSION['is_connect'] = false;
					$_SESSION['login'] = "";
					$_SESSION['email'] = "";	 	
					$_SESSION['nom'] = "";
					$_SESSION['prenom'] = "";

					$_SESSION = array();
					session_destroy();
				}

		}
				
	 }

?>