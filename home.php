<?php
session_start();

error_reporting(E_ERROR | E_PARSE); // paslēpj vienu anoying AF warningu
    
if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
    // Redirect the user to the login page or show an access denied message
    header('Location: index.php');
    exit;
}
    
if(isset($_POST["quit"])){
    $_SESSION['autorizejies']=0;
    session_destroy();
    header("Location: index.php");
}

include "Speles/spele.php";

// šo atkomentējot, home lapa nedaudz nobruks (vizuālā ziņā)
//echo
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home_style.css">
  </head>
  <body>
    <form id="quit-div" method="post"">
      <button name="quit" id="quit">Iziet</button>
    </form>
    <div id="izvelne"> 
      <!--Te atrodas lapa veikalniekiem-->
      <div id="Inventory">
        <iframe src="Inventory/inventory.php"></iframe>
      </div>
      <!--Te atrodas lapa spēlēm-->
      <div id="Speles">
        <iframe src="Speles/speles.php"></iframe>
      </div>
    </div>
  </body>
</html>