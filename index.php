<html>
<head>
	<title>COCKTAILMAKER</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/loader.css">
	<script src="js/myjs.js"></script>
</head>
<body>

<?php

if(isset($_POST["ausfuehren"])) {
    // Dein PHP-Code hier, z. B.:
    echo '<div class="loader"></div>';
}

function myphpfunction(){
    return '<div class="loader"></div>';
}


?>


<div id="main">
	
	<div id="header">
		<h3>COCKTAIL AUSWAHL</h3>
	</div>

	<div id="overlay"></div> 
	
<!-------------------- NEW COCKTAIL -------------------->
	<div id="wrapper">
		
		<h1>Caipi</h1>
		
		<div id="c_pic">
			<img src="img/tropical.png">
		</div>
		
		<div id="c_description">
				<b>ZUTAT1, ZUTAT2, ZUTAT3, ZUTAT4, ZUTAT5</b>
		</div>
		
		<div id="c_cta">
				<button class="cta_button" onclick="overlay_on(1000)">Diesen Cocktail machen!</button>
		</div>

	</div>

<!-------------------- NEW COCKTAIL -------------------->
	<div id="wrapper">
		
		<h1>BlueBla</h1>
		
		<div id="c_pic">
			<img src="img/tropical1.png">
		</div>
		
		<div id="c_description">
				ZUTAT1, ZUTAT2, ZUTAT3, ZUTAT4, ZUTAT5
		</div>
		
		<div id="c_cta">
				<form action="" method="post">
				   <input type="submit" name="ausfuehren" value="Absenden"/>
				</form>
		</div>

	</div>
	
<!-------------------- NEW COCKTAIL -------------------->	

</div>


</body>
</html>
