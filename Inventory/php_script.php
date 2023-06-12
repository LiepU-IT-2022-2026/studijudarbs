<?php
session_start();

if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
    // Redirect the user to the login page or show an access denied message
    header('Location: ../index.php');
    exit;
}

$lietotajvards = $_SESSION['id'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "2023_PROJ_SKOLAIGATAVS";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$gender_select = $_POST['ZensIkona'];
//$gender_select_girl = $_POST['MeiteneIkona'];

if(isset($_POST['ZensIkona']) && !isset($_POST['MeiteneIkona'])){
    $gender_select = $_POST['ZensIkona'];
    //echo 'Kaut kas ir, tik puika...'.$gender_select;
} else if(!isset($_POST['ZensIkona']) && isset($_POST['MeiteneIkona'])) {
    $gender_select = $_POST['MeiteneIkona'];
    //echo 'Kaut kas ir, tik meitene...'.$gender_select;
}

if(isset($_POST['ZensIkona']) || isset($_POST['MeiteneIkona'])){
    $sql = "UPDATE beta_lietotaji
    SET dzimums = ".$gender_select."
    WHERE lietotajvards = '$lietotajvards'";
    $conn->query($sql);
    echo '<script>
    window.parent.location.href = "../home.php";
  </script>';
}
?>