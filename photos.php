<?php
        $rep= "CV/images/photos";
        $id_rep = opendir($rep);
    ?>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="CV/styles/stylesPhotos.css" type="text/css" />
  <title>Photos</title>
</head>
<body>
  <div id="wrapper">
    <header>
      <h1>Mon site personnel</h1>
      <h2>Ma gallerie de photos</h2>
    </header>
    <!-- le menu de navigation -->
    <nav>
      <ul>
        <li><a href="CV/indexPage.html">Accueil</a></li>
        <li><a href="CV/monCV.html">Mon CV</a></li>
        <li><a href="CV/agenda.html">Agenda</a></li>
        <li><a id="encours" href="photos.html">Photos</a></li>
      </ul>
    </nav>
    <!-- le contenu de la page -->
    <section id="gallery">
	  <?php
	  $file = fopen("CV/images/photos/descriptions.txt", "r");
	  $descriptions = array();
	  while($line = fgets($file)){
			$explode = explode(" : ", $line);
			$descriptions[$explode[0]] = $explode[1];
	  }
	  fclose($file);
	  
		while ($image = readdir($id_rep)) {
			$pos = strpos($image,'Small');
			$pos2 = strpos($image, 'thumb');
			if($pos !== false OR $pos2 !== false){
				if($pos !== false){
					$grandeImage = substr($image,0,-9) . ".jpg";
				}
				else if($pos2 !== false){
					$grandeImage = substr($image,6);
				}
				if(isset($descriptions[$grandeImage])){
					echo "<div class=\"img\"><a href=\"CV/images/photos/$grandeImage\" title=\"$grandeImage\">
						<img src=\"CV/images/photos/$image\" width=\"110\" height=\"90\"/></a><div class=\"desc\">$descriptions[$grandeImage]</div></div>";
				}
				else {
					echo "<div class=\"img\"><a href=\"CV/images/photos/$grandeImage\" title=\"$grandeImage\">
						<img src=\"CV/images/photos/$image\" width=\"110\" height=\"90\"/></a><div class=\"desc\">$image</div></div>";
				}
			}
        }
		closedir($id_rep);
	?>
	</section>
  </div>
</body>
</html>
