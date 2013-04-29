<div class="Content">
				<h1>Information de <?php echo $_SESSION['login']; ?></h1>

				<h3 style=" margin-left: 75px;">	
						Login :	 	<?php echo $_SESSION['login'] ?> <br>
						Nom :  		<?php echo $_SESSION['nom'] ?><br>
					  	Prenom : 	<?php echo $_SESSION['prenom'] ?> <br>
					   	Mail : 		<?php echo $_SESSION['email'] ?> <br>
				</h3>


				<h1>Mise à jour </h1>

				<h3 style=" margin-left: 75px;">	
						Changement de password:
				</h3>

		<form id="exemple_form" method="post" action="">
                <input class="Box" name="OldPSWD" 	type="Password" placeholder="Ancien Password" 	required autofocus AUTOCOMPLETE=OFF <?php echo $OldPassFalse; 	echo $MdpIsRenew; ?>><br>
				<input class="Box" name="Password" 	type="Password" placeholder="Nouveau Password" 	required AUTOCOMPLETE=OFF 			<?php echo $MdpDiff; 		echo $MdpIsRenew; ?>><br>
				<input class="Box" name="NWPSD" 	type="Password" placeholder="Nouveau Password" 	required AUTOCOMPLETE=OFF 			<?php echo $MdpDiff; 		echo $MdpIsRenew; ?>><br>
    	        <button type=submit value=Valider class="exemple_btn">Update</button>
        </form>  
<br><br>

   <section id="horizontal_layout"></section>


				<h3 style=" margin-left: 75px;">	
						Changement de login ou d'adresse mail:
				</h3>

		<form id="exemple_form" method="post" action="">
                <input class="Box" name="NewPseudo" 	type="text" 	placeholder="login" 	required autofocus  AUTOCOMPLETE=OFF <?php echo $ChangeInfo; ?>><br>												
				<input class="Box" name="Newmail" 		type="mail"		placeholder="Email" 	required 			AUTOCOMPLETE=OFF 			<?php echo $ChangeInfo; ?>><br>
				<input class="Box" name="OLDPassword"	type="Password" placeholder="password" 	required 			AUTOCOMPLETE=OFF 			
																										            			<?php echo $ChangeInfo; ?>><br>
			 <button type=submit value=Valider class="exemple_btn">Update</button>
        </form>  
<br><br>
			




		</div>