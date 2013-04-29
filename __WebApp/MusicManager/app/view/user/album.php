<div class="Content">
				<h1>Album de <?php echo $Chanteur ; ?> </h1>

								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				

		<ul id="AlbumView">
			<li id="itemAlbumView" style="">
				<ul style="width: 290px;">
					<li style="	font-size: 3em;"><?php echo $Album ;?></li>
					<?php 
					$i = 1 ;
					while (	$donnees = $requete->fetch() ) {
						?>
						<li style="	font-size: 1.3em;"><?php echo $i.'. '.$donnees['Titre'] ;?></li>
						<?php
						$i +=1;
					}
					$requete->closeCursor();

					
					?>
				</ul>
				<img alt="Album1" src="/MusicManager/res/styles/default/Images/Pochette/<?php echo $Chanteur."_".$Album.".jpg"; ?>" />
			</li>
		</ul>

   				<section id="horizontal_layout"></section>


   		<ul id="ListAlbum">
			<?php

			$requete2->execute(array('Artiste' => $Chanteur));
			while ($donnees2 = $requete2->fetch())
			{
				?>
			<li >
				<ul id="itemAlbum">
					<li style="	font-size: 1.2em;"><?php echo $donnees2['Nom']; ?></li>
					<li style="	font-size: 1.6em;"><?php echo $donnees2['Titre']; ?></li>
					
				</ul>
				<?php echo "<a href='AlbumView.php?Album=".$donnees2['Titre']."&Artiste=".$donnees2['Nom']."'>"?> <img alt="Album1" src="/MusicManager/res/styles/default/Images/Pochette/<?php echo $donnees2['Nom']."_".$donnees2['Titre'].".jpg"; ?>" /></a>
			</li>
				<?php
			}
			$requete->closeCursor();  

			?>

		</ul>



</div>