<div class="Content">
		

	<?php
	if ( $allError == true ) {
	?>

		<h1>Erreur d'inscription</h1>
			
		<p> Merci, BLABLABLA , mais le login et l'email indiqué existe déjà. </p>

		<form id="exemple_form" method="post" action="/MusicManager/user/inscription">
                <input class="box" name="login" type="text" placeholder="login" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="name" type="text" placeholder="nom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="surname" type="text" placeholder="prenom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="mail" type="mail" placeholder="mail" AUTOCOMPLETE=OFF required ><br>
    	   	    <input class="box" name="password" type="password" placeholder="password" AUTOCOMPLETE=OFF required <?php echo $keyStyle ?>><br><br>					
    	        <button type=submit value=Valider class="exemple_btn">Inscription</button>
        </form>  

		<?php
	}
	elseif ($allError == false) {
	?>

		<h1>Inscription reussie</h1>
			
		<p> Merci, BLABLABLA , l'inscription a été un succes. </p>

	<?php
	}
	elseif (isset($mailExist)){
	?>

		<h1>Erreur d'inscription</h1>
			
		<p> Merci, BLABLABLA , le mail est déjà présent dans notre base de données. </p>

		<form id="exemple_form" method="post" action="/MusicManager/user/inscription">
                <input class="box" name="login" type="text" placeholder="login" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="name" type="text" placeholder="nom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="surname" type="text" placeholder="prenom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="mail" type="mail" placeholder="mail" AUTOCOMPLETE=OFF required ><br>
    	   	    <input class="box" name="password" type="password" placeholder="password" AUTOCOMPLETE=OFF required <?php echo $keyStyle ?>><br><br>					
    	        <button type=submit value=Valider class="exemple_btn">Inscription</button>
        </form>  

	<?php
	}
	elseif (isset($loginExist)){
	?>

		<h1>Erreur d'inscription</h1>
			
		<p> Merci, BLABLABLA , le mail est déjà présent dans notre base de données. </p>

		<form id="exemple_form" method="post" action="/MusicManager/user/inscription">
                <input class="box" name="login" type="text" placeholder="login" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="name" type="text" placeholder="nom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="surname" type="text" placeholder="prenom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="mail" type="mail" placeholder="mail" AUTOCOMPLETE=OFF required ><br>
    	   	    <input class="box" name="password" type="password" placeholder="password" AUTOCOMPLETE=OFF required <?php echo $keyStyle ?>><br><br>					
    	        <button type=submit value=Valider class="exemple_btn">Inscription</button>
        </form>  

	<?php
	}
	?>


</div>