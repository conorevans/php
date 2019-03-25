<?php
		include 'photo.php';
		include 'album.php';
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
		  $album = new Album("CV/images/photos/descriptions.txt","CV/images/photos");
		  foreach($album->photos as $photo){
			echo "<div class=\"img\"><a href=\"CV/images/photos/$photo->fichierImage\" title=\"$photo->fichierImage\">
						<img src=\"CV/images/photos/$photo->fichierImagette\" width=\"110\" height=\"90\"/></a><div class=\"desc\">$photo->legende</div></div>";
		  }
			?>
			</section>
		</div>
	</body>
</html>
