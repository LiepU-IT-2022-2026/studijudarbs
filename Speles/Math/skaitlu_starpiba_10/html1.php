<?php
// Temp
session_start();

if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
    // Redirect the user to the login page or show an access denied message
    header('Location: ../../../index.php');
    exit;
}
?>

<!--
  Doti random skaitļi no 0 līdz 10. Lietotājam ir skaitļu starpība.
-->

<!doctype html>
<html>
  <head>
    <title>Atņem!</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css1.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="html.js"></script>
  </head>
  <body style="cursor:auto">
  <div id="content">
    <div id="Skaitlis-container"> </div>
    <button id="check" onclick="check()">Pārbaudīt atbildes</button>
    <div id="Ending">
      <form id="Ending-screen" action="save_score.php" method="post">
        <input type="hidden" name="score" value="10">
        <button name="end" id="end" onclick="end()">Sākums</button>
        <button name="again" id="again" onclick="restart()">Spēlēt vēlreiz</button>
      </form>
    </div>
  </div>
  <div class="tooltip">&#8505
    <span class="tooltiptext">Tavs uzdevums ir aprēķināt abu skaitļu starpību.</span>
  </div>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="../../../home.php">Sākums</a>
    </div>
  </div>
  <span  onclick="openNav()">&#9776;</span>
    <script>
      function openNav() {
        document.getElementById("myNav").style.height = "100%";
      }
      function closeNav() {
        document.getElementById("myNav").style.height = "0%";
      }
    </script>
  </body>
</html>