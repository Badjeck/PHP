<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Météo</title>
    </head>
	<body>
		<h1>Paris</h1>
		<a href="index.php">Accueil</a>.</h2>
		<?php
			for ($i = 0; $i <= 4; $i++){
				echo "<h2> J+$i :</h2>";
				echo "<img src='http://www.prevision-meteo.ch/uploads/widget/paris_$i.png'>";
			}
		?>
	</body>
</html>