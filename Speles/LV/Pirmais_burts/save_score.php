<?php
// Temp
session_start();

if (!isset($_SESSION['autorizejies']) || $_SESSION['autorizejies'] !== 1) {
    // Redirect the user to the login page or show an access denied message
    header('Location: ../../../index.php');
    exit;
}

$Username = $_SESSION['id']; //tiks nomainīts uz session id

// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2023_PROJ_SKOLAIGATAVS";
// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the score from the request
$score = $_POST['score'];

// Store the score in the database
if(isset($_POST['again'])){
    $query = "
    UPDATE beta_lietotaji
    SET nauda = nauda + $score
    WHERE lietotajvards LIKE '$Username';
    "; // Replace "game_scores" with your table name
    $result = $conn->query($query);

    if ($result === TRUE) {
        //echo "Score saved successfully.";
        //header("Location: html1.php");
        echo '<script>
          window.location.href = "html1.php";
        </script>';
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
};

if(isset($_POST['end'])){
    $query = "
    UPDATE beta_lietotaji
    SET nauda = nauda + $score
    WHERE lietotajvards LIKE '$Username';
    "; // Replace "game_scores" with your table name
    $result = $conn->query($query);

    if ($result === TRUE) {
        //echo "Score saved successfully.";
        //header("Location: html1.php");
        echo '<script>
          window.location.href = "../../../home.php";
        </script>';
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
};

//testiem
/*if(isset($submit)){
  echo $_SESSION['id'];
  echo "viss strādā!";
}*/
?>