<?php
session_start();
if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
    // Redirect the user to the login page or show an access denied message
    header('Location: ../../index.php');
    exit;
}
?>
<html>
    <head>
      <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <body>
      <div class="container">
        <a href="../../home.php">
          <button>
            <img src="SHOPINPROGRESSBUTTON2.png" >
          </button>
        </a>
      </div>
    </body>
</html>