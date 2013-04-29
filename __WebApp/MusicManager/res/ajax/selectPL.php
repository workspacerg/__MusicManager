<?php
	
	$q=$_GET["q"];
	
	
		try
		{

			//$bdd = new PDO('mysql:host=localhost; dbname=musicmanagerv1', 'admin', 'admin');
			$bdd = new PDO('mysql:host=localhost; dbname=music_manager', 'root', 'root');
			//$bdd = new PDO('mysql:host=localhost; dbname=EGVv5dO7', 'EGVv5dO7', 'admin');
		}
		catch(Exception $e)
		{
			die('Erreur : '. $e->getMessage());
			echo "Erreur lors de la connection";
		}
	

				$requete = $bdd->query("SELECT PL.nom_pl, C.titre, A.Titre , C2.Nom
									FROM chanson C
									JOIN inter_pl_chanson IPLC ON IPLC.idChanson = C.idChanson
									JOIN playlist PL ON PL.id_playlist = IPLC.id_playlist
									JOIN inter_chanson_album ICA ON ICA.idChanson = C.idChanson
									JOIN album A ON A.idAlbum = ICA.idAlbum
									JOIN interchansonchanteur ICC ON ICC.idChanson = C.idChanson
									JOIN chanteur C2 ON C2.idChanteur = ICC.idChanteur
        							WHERE PL.id_playlist = $q ");
	

	
					

					echo "	<div class=\"table_playlist\" >
							<table>
							<tr>
								<td>Artiste</td>
					            <td>Album </td>
					            <td>Chanson</td>
					            <td>action</td>
							</tr>
					";
					while ($donnees = $requete->fetch()) {
						
					  echo "<tr>";
					  	  echo "<td>" . $donnees['Nom'] . "</td>";
						  echo "<td>" . $donnees['Titre'] . "</td>";
						  echo "<td>" . $donnees['titre'] . "</td>";
						  echo "<td>" . $donnees['nom_pl'] . "</td>";
					  echo "</tr>";
					}
				$requete->closeCursor(); 

					 
					echo "</table></div>";

		

?>