<?php
// Temp
session_start();

if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
    // Redirect the user to the login page or show an access denied message
    header('Location: ../../../index.php');
    exit;
}
?>

<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" href="css1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="javascript.js"></script>
</head>
<body>
  <div id="content">
    <h1 style="display: flex; justify-content: center; margin-top: 150px;">IERAKSTI UZ KĀDU BURTU SĀKAS ŠIE AUGĻI!</h1>
    <div id="picture-container"></div>
    <div id="Ending">
    <form id="Ending-screen" action="save_score.php" method="post">
      <input type="hidden" name="score" value="10">
      <button name="end" id="end" onclick="end()">Sākums</button>
      <button name="again" id="again" onclick="restart()">Spēlēt vēlreiz</button>
    </form>
    </div>
    <button id="check" onclick="check()">Pārbaudīt atbildes</button>
  </div>
  <div class="tooltip">&#8505
    <span class="tooltiptext">Tavs uzdevums ir ierakstīt attēlā redzamā augļa vai ogas pirmo burtu.</span>
  </div>
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="../../../home.php">Sākums</a>
    </div>
  </div>
  <span onclick="openNav()">&#9776;</span>
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
