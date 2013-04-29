<?php
$Pseudo = $_SESSION['login'] ;
$Nom =    $_SESSION['nom'];
$Prenom = $_SESSION['prenom'];
$Mail =   $_SESSION['email'];


if(!@include_once ('app/module/admin/connect_BDD.php')){
				echo "La connection à la base de donnée a échouée.";
		}	
		else{

			//$requete = $bdd->prepare("");
		
			//$requete->execute();
		
		}


if (isset($_POST['OldPSWD']) AND isset($_POST['Password']) AND isset($_POST['NWPSD']) )
{
    		
			
			$requete = $bdd->query("SELECT Pswd 
										FROM user
        									where login='$Pseudo'");
			$donnees = $requete->fetch();
			$requete->closeCursor(); 


			$MdpIsRenew  = "";
			$MdpDiff ="";

			if ($donnees['Pswd'] == $_POST['OldPSWD']) {

				$OldPassFalse  = ""; //Ancien MDP non valide

				if ($_POST['Password'] == $_POST['NWPSD']) {
					$NewPWD = $_POST['NWPSD'];
					$MdpDiff  = "";

						$requete = $bdd->query("UPDATE user
													SET Pswd = '$NewPWD'
														WHERE login='$Pseudo'");
					
					$MdpIsRenew  = "	style= \" background: url('/MusicManager/res/styles/default/Icones/tick.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\"";

				$requete->closeCursor(); 
				}
				else{
					$MdpDiff  = "style= \" background: url('/MusicManager/res/styles/default/Icones/error.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\""; //Mdp différent 
					}
			}
			else {
				$OldPassFalse  = "style= \" background: url('/MusicManager/res/styles/default/Icones/error.png'); 
											background-repeat: no-repeat;
	            							background-position: 5px center ;
	            							background-size: 20px;
	            							background-color: white;\""; //Ancien MDP non valide
			}
 
}
else{
			$MdpIsRenew  = "style= \" background: url('/MusicManager/res/styles/default/Icones/key.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\"";
			$MdpDiff  = "";
			$OldPassFalse  = "";
}

if (isset($_POST['OLDPassword']) AND isset($_POST['NewPseudo']) AND isset($_POST['Newmail']) )
{
    						
			$requete2 = $bdd->query("SELECT Pswd 
										FROM user
        									where login='$Pseudo'");
			$donnees2 = $requete2->fetch();
			$requete2->closeCursor(); 

			//Verification du mot de passe
			if ($donnees2['Pswd'] == $_POST['OLDPassword']) {
				$PostPseudo = $_POST['NewPseudo'];
				$PostMail  	= $_POST['Newmail'];

				$requete4 = $bdd->query("SELECT COUNT( Login ), COUNT(mail) 
										 	FROM user
												WHERE Login <> '$Pseudo' AND mail<>'$Mail' AND Login='$PostPseudo' OR mail='$PostMail'
												");
				$donnees4 = $requete4->fetch();

				$requete4->closeCursor();

				//echo $donnees4['COUNT( Login )'] . " " .$donnees4['COUNT(mail)'] . " " . $Mail;
				if ($donnees4['COUNT( Login )'] > 0 || $donnees4['COUNT(mail)'] > 0) {
					
									$ChangeInfo  = "	style= \" background: url('/MusicManager/res/styles/default/Icones/alert.png'); 
														background-repeat: no-repeat;
				            							background-position: 5px center ;
				            							background-size: 20px;
				            							background-color: white;\"";
				}
				else{

				$requete3 = $bdd->query("UPDATE user 
											SET Login ='$PostPseudo', Mail='$PostMail' 
											WHERE Login='$Pseudo'");
				$requete3->fetch();

				$_SESSION['login'] = $_POST['NewPseudo'];
				$_SESSION['email'] = $_POST['Newmail'];
				$ChangeInfo  = "	style= \" background: url('/MusicManager/res/styles/default/Icones/tick.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\"";



				$requete3->closeCursor();
				} 
			}
			else
			{
				$ChangeInfo  = "	style= \" background: url('/MusicManager/res/styles/default/Icones/error.png'); 
										background-repeat: no-repeat;
            							background-position: 5px center ;
            							background-size: 20px;
            							background-color: white;\"";
			}

}
else{
		$ChangeInfo = " style{test}" ;
}



?>


