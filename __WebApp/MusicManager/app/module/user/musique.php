<?php

if(!@include_once ('app/module/admin/connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
		else{

			$requete = $bdd->prepare("  SELECT A.Nom , D.Titre
										FROM album D, interchansonchanteur I
											INNER JOIN chanteur A ON I.IdChanteur = A.IdChanteur
											INNER JOIN chanson C ON I.IdChanson = C.IdChanson
												WHERE (C.Titre, D.Titre)  in (
													SELECT C.Titre, A.Titre
														FROM   inter_chanson_album I
															INNER JOIN album A ON I.IdAlbum = A.IdAlbum
															INNER JOIN chanson C ON I.IdChanson = C.IdChanson
																WHERE A.Titre IN (	
										SELECT A.Titre
											FROM user U2,  inter_chanson_album I
												INNER JOIN album A ON I.IdAlbum = A.IdAlbum
											    INNER JOIN chanson C ON I.IdChanson = C.IdChanson
													WHERE (U2.Login, C.Titre) IN (
										SELECT U.Login, C.Titre
											FROM inter_user_chanson I
												INNER JOIN user U ON I.IdUser = U.IdUser
												INNER JOIN chanson C ON I.IdChanson = C.IdChanson
													WHERE U.Login =  :login ) GROUP BY A.Titre)) 
														GROUP BY D.Titre 
														ORDER BY D.Titre DESC ");
		
			$requete->execute(array('login' => $_SESSION['login']));
		
		}


?>