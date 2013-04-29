<?php

	$Chanteur 	= $_GET['Artiste']  ; 
	$Album		= $_GET['Album'] 	; 


		if(!@include_once ('app/module/admin/connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
		else{

			$requete = $bdd->prepare(" SELECT U.Login, C.Titre
											FROM inter_user_chanson I
												INNER JOIN user U ON I.IdUser = U.IdUser
												INNER JOIN chanson C ON I.IdChanson = C.IdChanson
													WHERE C.Titre IN (
											SELECT C.Titre 
												FROM inter_chanson_album I
													INNER JOIN album A ON I.IdAlbum = A.IdAlbum
												    INNER JOIN chanson C ON I.IdChanson = C.IdChanson
														WHERE A.Titre = :Album ) 
															AND U.Login = :Pseudo");
		
			$requete->execute(array('Album' => $Album, 'Pseudo' => $_SESSION['login'] ));
		
			$requete2 = $bdd->prepare("SELECT  D.Nom, A.Titre
										FROM chanteur D, inter_chanson_album I
											INNER JOIN album A ON I.IdAlbum = A.IdAlbum
										    INNER JOIN chanson C ON I.IdChanson = C.IdChanson
												WHERE (C.Titre, D.Nom) IN (	
													SELECT C.Titre, B.NOM
														FROM interchansonchanteur I
															INNER JOIN chanteur B ON I.IdChanteur = B.IdChanteur
												        	INNER JOIN chanson C ON I.IdChanson = C.IdChanson
											                   WHERE B.Nom LIKE :Artiste) GROUP BY A.Titre ") ; 


			
		}

?>