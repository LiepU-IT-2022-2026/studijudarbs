<?php
    //error_reporting(E_ERROR | E_PARSE); // paslēpj vienu anoying AF warningu
    session_start();

  if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
      // Redirect the user to the login page or show an access denied message
      header('Location: ../index.php');
      exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
	 <style>
  		body {
  			background-image: url("school.png");
  			width: 100%;
  			height: 100%;
  		}
  	
  		/*img {
  			max-width: 100%;
  			height: auto;
  		}*/
		</style>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
		<div>
    <!--<base target="_parent">
    <a href="./Speles/Math/blakus_esosie/html1.php"><img src="..\bildes\3Spele.png"  width="150" height="150" alt="Image 1"></a>
      
  <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/LV%20Amanda/Alfabets/html1.html"><img src="..\bildes\Spele 2.png" width="150" height="150" alt="Image 2"></a>
  
    <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/LV%20Amanda/Lielais_mazais_burts/html1.html"><img src="..\bildes\Spēle1.png" width="150" height="150" alt="Image 3"></a>
  
      <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/Math/Skaitlu_starpiba_5/html1.html"><img src="..\bildes\bilde3.png" width="150" height="150" alt="Image 4"></a>
  
      <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/Math/Skaitlu_starpiba_10/html1.html"><img src="..\bildes\bilde4.png" width="150" height="150" alt="Image 5"></a>
  
      <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/Math/Skaitlu_summa_5/html1.html"><img src="..\bildes\bilde2.png" width="150" height="150" alt="Image 6"></a>
  
      <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/Math/Skaitlu_summa_10/html1.html"><img src="..\bildes\bilde1.png" width="150" height="150" alt="Image 7"></a>
  
      <a href="https://liepu-it-2022-2026.github.io/Uzdevumi/Math/Blakus_esosie/html1.html"><img src="..\bildes\bilde5.png" width="150" height="150" alt="Image 8"></a>-->
        <form method="post" action="spele_href.php">
          <button name="Pirmais_burts" id="Pirmais_burts" value="Pirmais_burts"></button>
          <button name="Alfabets" id="Alfabets"></button>
          <button name="Lielais_mazais_burts" id="Lielais_mazais_burts"></button>
          <button name="skaitlu_starpiba_5" id="skaitlu_starpiba_5"></button>
          <button name="skaitlu_starpiba_10" id="skaitlu_starpiba_10"></button>
          <button name="skaitlu_summa_5" id="skaitlu_summa_5"></button>
          <button name="skaitlu_summa_10" id="skaitlu_summa_10"></button>
          <button name="blakus_esosie" id="blakus_esosie"></button>
        </form>
      </div>
    <!--<h1><?php// echo $_SESSION['id'];?></h1> Tests ar session-->
    </body>
</html>