<?php
  require("../../../config_vp2019.php");
  require("functions_user.php");
  $database = "if19_kristjan_lu_1";
  $mydescription = null;
  $bgcolor = null;
  $txtcolor = null;
  $mybgcolor = "#FFFFFF";
  $mytxtcolor = "#000000";
  //var_dump();
  
  //kontrollime, kas on sisse logitud
  if(!isset($_SESSION["userid"])){
	  header("Location: page.php");
	  exit();
  }
  
  //logime välja
  if(isset($_GET["logout"])){
	  session_destroy();
	  header("Location: page.php");
	  exit();
  }
  if(isset($_POST["submitProfile"])){
	  $notice = userProfile($mydescription, $bgcolor, $txtcolor);
  }
  
  $userName = $_SESSION["userFirstname"] ." " .$_SESSION["userLastname"];
  
   require("header.php");
?>


<body>
  <?php
    echo "<h1>" .$userName ." koolitöö leht</h1>";
  ?>
  <p>See leht on loodud koolis õppetöö raames
  ja ei sisalda tõsiseltvõetavat sisu!</p>
  <hr>
  
  <style>
	body{background-color: #FFFFFF; 
	color: #000000} 
  </style>
  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>Minu kirjeldus</label><br>
	<textarea rows="10" cols="80" name="description"><?php echo $mydescription; ?></textarea>
	<br>
	<label>Minu valitud taustavärv: </label><input name="bgcolor" type="color" value="<?php echo $mybgcolor; ?>"><br>
	<label>Minu valitud tekstivärv: </label><input name="txtcolor" type="color" value="<?php echo $mytxtcolor; ?>"><br>
	<input name="submitProfile" type="submit" value="Salvesta profiil">
  </form> 
  <br>
  <p><?php echo $userName; ?> | Logi <a href="?logout=1">välja</a>!</p>
  
  
</body>
</html>
