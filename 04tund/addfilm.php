<?php
  require("../../../config_vp2019.php");
  require("fucntions_film.php");
  //echo $serverHost;
  $userName = "Kristjan Luur";
  $database = "film";

  $filmInfoHTML = readAllFilms();
  
  require("header.php");
  echo "<h1>" .$userName . ", veebiprogrammeerimine</h1>";
 ?>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiselt võetavat sisu!</p>
  <hr>
  <h2>Eesti filmid</h2>
  <p>Praegu meie andmebaasis on järgmised filmid:</p>
  <?php
	echo $randomInfoHTML;
  ?>

</body>
</html>