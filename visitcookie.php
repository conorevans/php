<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Menu</title>
    <section>
        <h1>Menu</h1>
    </section>
</head>
<body>
	<?php
		if(isset($_COOKIE['nbVisites'])){
			$nbVisites = $_COOKIE['nbVisites'] + 1;
			setcookie("nbVisites", $nbVisites, time() + (86400 * 30), "/");
			echo "<h1>Heureux de vous revoir pour la $nbVisites ème fois sur mon mini site web" . "<br><br>";
		}
		else{
			setcookie("nbVisites", 1, time() + (86400 * 30), "/");
			echo "<h1>Heureux de vous revoir pour la 1 ème fois sur mon mini site web" . "<br><br>";
		}
	?>
    <img alt="menu" src="images/menu.png" usemap="#map">
    <map name="map" id="map">
        <area shape="rect" coords="56,91, 208, 170" alt="UFR-SHS" href="monCV.html">
        <area shape="rect" coords="256, 76, 437, 172" alt="Master IC2A" href="http://imss-www.upmf-grenoble.fr/master-ic2a/">
        <area shape="rect" coords="186, 200, 311, 328" alt="Mon CV" href="http://imss.upmf-grenoble.fr">
    </map>
</body>
</html>
