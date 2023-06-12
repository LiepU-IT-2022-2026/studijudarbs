<?php
// Šī faila funkcija ir nolasīt no spēļu izvēlnes nospiesto pogu, lai varētu aizvadīt lietotāju uz pareizo spēli. Nākotnē pievienos nepieciešamās funkcijas, lai varētu arī uzkrāt datus, bet šobrīd tas ir mazsvarīgi.

/* LATVIEŠU VALODA */
if(isset($_POST["Pirmais_burts"])){
  //echo 'pirmais burts'; Testam
  //include "home.php"; iespējams vajadzēs ko līdzīgu
  //header("Location: LV/Pirmais_burts/html2.php"); Šis itkā strādā - tomēr spēle palaižas tajā iframe
  echo '<script>
    window.parent.location.href = "LV/Pirmais_burts/html1.php";
  </script>';
};

if(isset($_POST["Alfabets"])){
  echo '<script>
    window.parent.location.href = "LV/Alfabets/html1.php";
  </script>';
};

if(isset($_POST["Lielais_mazais_burts"])){
  echo '<script>
    window.parent.location.href = "LV/Lielais_mazais_burts/html1.php";
  </script>';
};

/* MATEMĀTIKA */
//pirms sačakarēju Amandas spēli, ielikšu savu matemātikas spēli uz pogas.
if(isset($_POST["blakus_esosie"])){
  //echo 'pirmais burts'; Testam
  //include "home.php"; iespējams vajadzēs ko līdzīgu
  //header("Location: LV/Pirmais_burts/html2.php"); Šis itkā strādā - tomēr spēle palaižas tajā iframe
  //include "Math/blakus_esosie/html1.php"; // tomēr nevajadzēja - lieki čakarē smadzeni.
  echo '<script>
    window.parent.location.href = "Math/blakus_esosie/html1.php";
  </script>';
};

if(isset($_POST["skaitlu_starpiba_5"])){
  echo '<script>
    window.parent.location.href = "Math/skaitlu_starpiba_5/html1.php";
  </script>';
};

if(isset($_POST["skaitlu_starpiba_10"])){
  echo '<script>
    window.parent.location.href = "Math/skaitlu_starpiba_10/html1.php";
  </script>';
};

if(isset($_POST["skaitlu_summa_5"])){
  echo '<script>
    window.parent.location.href = "Math/skaitlu_summa_5/html1.php";
  </script>';
};

if(isset($_POST["skaitlu_summa_10"])){
  echo '<script>
    window.parent.location.href = "Math/skaitlu_summa_10/html1.php";
  </script>';
};

?>