<?php
/* Nokomentēšu šeit visu, ko pievienoju, pēc tava principa, lul */
session_start(); // startējam session

if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) { //pārbauda vai lietotājs nav autorizējies
    header('Location: ../../../index.php'); // ja nav, lietotājs tiek pārmest uz login lapu
    exit;
}
?>
  
<!doctype html> <!-- programmas tips ir HTML5 -->
<html> <!-- HTML koda sākums -->
  <head> <!-- galvenes sākums -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> <!-- šis nodrošina, ka pārlūks pareizi interpretē simbolus -->
    <link rel="stylesheet" type="text/css" href="css1.css"> <!-- saista ārējo CSS failu ar šo HTML failu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> <!-- iekļauj jQuery bibliotēku -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> <!-- iekļauj jQuery UI bibliotēku -->
    <script src="html.js"></script> <!-- saista ārējo JavaScript failu ar šo HTML failu -->
</head> <!-- galvenes beigas -->
<body style="cursor:auto"> <!-- body sākums; pārlūkprogramma automātiski noteiks kursora tipu atkarībā no konteksta -->
<div id="content"> <!-- div elements ar savu ID -->
  <div id="Trukstosie"> </div> <!-- vieta, kur atradīsies trūkstošie burti -->
  <div id="Alfabets"> </div> <!-- vieta, kur atradīsies alfabēts -->
  <div id="Ending"> <!-- beigu daļa -->
    <form id="Ending-screen" action="save_score.php" method="post"> <!-- Izveidojam formu, no kuras var nolasīt formā glabājošos datus (kamēr elementiem ir savs name) -->
      <input type="hidden" name="score" value="10"> <!-- neredzams input lauks, kurā tiek saglabāta informācija, cik punktus var iegūt no šī uzdevuma/spēles -->
      <button name="end" id="end" onclick="end()">Sākums</button> <!-- Funkcija tāda pati, kā pogai again, tikai tā vietā, lai spēlētu spēli vēlvienreiz, lieotājs tiek atgriezt uz sākuma izvēlni -->
      <button name="again" id="again" onclick="restart()">Spēlēt vēlreiz</button> <!-- beigu daļā ir poga, ar kuru izpildās save_score.php funkcijas un var uzsākt vēlreiz šo spēli -->
    </form> <!-- Aizveram formu -->
  </div> <!-- iedalījuma beigas -->
</div>
<div class="tooltip">&#8505 <!-- satur Unicode simbolu -->
  <span class="tooltiptext">Tavs uzdevums ir ievilkt alfabēta burtus pareizajās vietās.</span> <!-- un tajā ir izlasāms šis teksts -->
</div>
<div id="myNav" class="overlay"> <!--  -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> <!-- uzspiežot simbolu, parādas pārklājums. Vēlreiz uzspiežot, aizveras -->
  <div class="overlay-content">
    <a href="../../../home.php">Sākums</a> <!-- hipersaite -->
  </div>
</div>
<span  onclick="openNav()">&#9776;</span> <!-- attēlo Unicode simbolu, satur openNav funkciju -->
<script> //JavaScript funkcijas sākums
function openNav() {
  document.getElementById("myNav").style.height = "100%"; //augstums - 100%
}
function closeNav() {
  document.getElementById("myNav").style.height = "0%"; //augstums - 0%
}
</script> <!-- JavaScript funkcijas beigas -->
</body>
</html>