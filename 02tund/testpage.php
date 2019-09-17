<?php
  $userName = "Kristjan Luur";
  $fullTimeNow = date("d.m.Y H:i:s");
  $hourNow = date("H");
  $partOfDay = "hägune aeg";
  
  if($hourNow < 10 and $hourNow > 7){
	$partOfDay = "hommik";  
  }
  if($hourNow > 10 and $hourNow < 12){
	$partOfDay = "ennelõuna";
  }
  if($hourNow > 12 and $hourNow < 16){
	$partOfDay = "pärastlõuna";
  }
  if($hourNow < 22 and $hourNow > 16){
	$partOfDay = "õhtu";
  }
  if($hourNow > 22 and $hourNow < 7){
	$partOfDay = "öö";
  }
  
?>
<!DOCTYPE html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <title>
  <?php
    echo $userName;
  ?>
  programmeerib veebi</title>

</head>
<body>
  <?php
    echo "<h1>" .$userName . ", veebiprogrammeerimine</h1>";
  ?>
  <p>See veebileht on loodud õppetöö käigus ning ei sisalda mingit tõsiselt võetavat sisu!</p>
  <hr>
  <?php
    echo "<p>Lehe avamise hetkel oli aeg: " .$fullTimeNow .", " .$partOfDay ." </p>";
  ?>
  <a href="https://www.google.com">See on link Googlisse</a>
  
</body>
</html>