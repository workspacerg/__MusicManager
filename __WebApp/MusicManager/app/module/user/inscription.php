<?php


	//Si formlulaire plein
	if (isset($_POST['login'])) {
		
		if(!@include_once ('app/module/admin/connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
		else{

			$requete = $bdd->prepare(" SELECT count(login) FROM user WHERE login= :log");
			$requete->execute(array('log' => $_POST['login']));
			$veriflogin = $requete->fetch();
			$requete->closeCursor();

			$requete = $bdd->prepare(" SELECT count(login) FROM user WHERE mail= :mail");
			$requete->execute(array('mail' => $_POST['mail']));
			$verifmail = $requete->fetch();
			$requete->closeCursor();



			if ($verifmail['count(login)'] == 0 && $veriflogin['count(login)'] == 0 ) {
				
				$requete = $bdd->prepare("INSERT INTO `user` (`IDUser`, `Nom`, `Prenom`, `Login`, `Pswd`, `Mail`) 
 												VALUES (NULL, :nom, :prenom, :login, :pswd, :mail)");
				$requete->execute(array('nom' => $_POST['name'], 'prenom' => $_POST['surname'], 'login' => $_POST['login'], 
											'pswd' => $_POST['password'], 'mail' => $_POST['mail']));
				$requete->closeCursor();

				$allError = false;
			
			}
			elseif ($verifmail['count(login)'] != 0) {
				$mailExist = true ; 
			}
			elseif ($veriflogin['count(login)'] == 0 ) {
				$loginExist = true ;
			}
			else{
				$allError = true;
			}

		}



	}
	else
	{
		$noform = true;
	}

?>