<?php

		if(!@include_once ('connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
		else{

			$requete = $bdd ->prepare("");
			$requete->execute(array( 'Com' => $_POST['COMM'],  'IdEvent' => $Nom_Evenement,'IdUser' => $ID_USER));

		}

?>