<?php
session_start();

error_reporting(E_ERROR | E_PARSE);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "2023_PROJ_SKOLAIGATAVS";

$conn = new mysqli($host, $username, $password, $dbname);

// Pārbauda savienojumu
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Pieteikšanās forma
if (isset($_POST['ielogoties'])) {
    $lietotajvards = $_POST['username'];
    $parole = $_POST['password'];

    $sifretaParole = md5($parole, "1234");
    // Pārbauda vai lietotājs eksistē
    $sql = "SELECT * FROM beta_lietotaji WHERE lietotajvards = '$lietotajvards' AND parole = '$sifretaParole'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Lietotājs eksistē pārvada uz home page
        mysqli_close($conn);
        //header("Location: home.php") bija domāta testam;
        $_SESSION['autorizejies']=1;	
        $_SESSION['id']=$lietotajvards;
        define('AUTORIZEJIES',1);
        define('LIETOTAJVARDS',$_SESSION['id']);
        //exit(); Datubāzi vēl vajadzēs
    } else {
        // Lietotājs neeksistē, error message.
      define('AUTORIZEJIES',0);
      define('LIETOTAJVARDS','');
      echo '<script>
      alert("Nepareizs lietotājvārds vai parole.");
      window.location.href = "index.php";
      </script>';
    }
}

if(isset($_SESSION['autorizejies']) && $_SESSION['autorizejies']==1){
    //if(isset($_COOKIE['autorizejies']) && $_COOKIE['autorizejies']==1){
    include "home.php"; 
    
    echo '<script>window.location.href = "home.php";</script>';
    exit();
}

?>