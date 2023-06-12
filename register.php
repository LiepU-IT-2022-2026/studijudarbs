<?php
// Savienošanās ar SQL datubāzi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2023_PROJ_SKOLAIGATAVS";



$savienojums = mysqli_connect($servername, $username, $password, $dbname);

//Pārbauda savienojumu
if (!$savienojums){
    die("Pieslēgties neizdevās: " . mysqli_connect_error());
} else {
 ##   echo "Savienojums ar datu bāzi veiksmīgi izveidots!";


// Reģistrācijas forma
if (isset($_POST['registreties'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeatpassw= $_POST['registerRepeatPassword'];

    if ($password == $repeatpassw){
    // Sagatavo un izpilda vaicājumu, lai pārbaudītu, vai lietotājvārds jau tiek izmantots
    $stmt = $savienojums->prepare("SELECT * FROM beta_lietotaji WHERE lietotajvards = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Parāda, ka tāds lietotājvārds jau tiek izmantots
        echo '<script>
      alert("Tāds lietotājvārds jau tiek izmantots.");
      window.location.href = "index.php";
      </script>';
    } else {
        $sifretaParole = md5($password, "1234");
        // Sagatavo un ievieto datus datubāzē
        $stmt = $savienojums->prepare("INSERT INTO beta_lietotaji (ID_lietotajs, lietotajvards, parole, dzimums, nauda) VALUES (NULL, ?, ?, '0', '0')");
        $stmt->bind_param("ss", $username, $sifretaParole);

        if ($stmt->execute()) {
            // Reģistrācija veiksmīga, pārvada uz sākumlapu
            header("Location: index.php");
            exit();
        } else {
            // Kļūda ievietot datus
            echo "Error: " . $savienojums->error;
        }
    }
    $stmt->close();
    }else{
        echo "Paroles nesakrīt. Mēģini vēlreiz.";
    }

    //Aizveram savienojumu ar datubāzi
}
}
$savienojums->close();
?>