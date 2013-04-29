<script src="/MusicManager/res/js/Chart.js"></script>

<div class="Content">
				<h1>Accueil</h1>

	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
				


				<h1>Inscription</h1>

    	<form id="exemple_form" method="post" action="/MusicManager/user/inscription">
                <input class="box" name="login" type="text" placeholder="login" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="name" type="text" placeholder="nom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="surname" type="text" placeholder="prenom" AUTOCOMPLETE=OFF required ><br>
                <input class="box" name="mail" type="mail" placeholder="mail" AUTOCOMPLETE=OFF required ><br>
    	   	    <input class="box" name="password" type="password" placeholder="password" AUTOCOMPLETE=OFF required <?php echo $keyStyle ?>><br><br>					
    	        <button type=submit value=Valider class="exemple_btn">Inscription</button>
        </form>  
        
				<h1>Telechargement</h1>

<canvas id="canvas" height="300" width="500" style="margin-left: 170px;"></canvas>


	<script>

		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(151,187,205,1)",
					pointStrokeColor : "#fff",
					data : [28,48,40,19,96,27,100]
				}
			]
			
		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	
	</script>



		</div>