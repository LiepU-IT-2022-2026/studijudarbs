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


?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			body {
				
				background-image: url("Untitled.png");
			}
			
			/*
			img {
				max-width: 100%;
				height: auto;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			
			img:nth-child(1) {
				left: 25%;
			}
			
			img:nth-child(2) {
				left: 75%;
			}
			
			img:nth-child(3) {
				display: none;
				
				
			}
			
			img:nth-child(4) {
				display: none;
				
			}
			img.clickable-image {
				position: fixed;
				bottom:100px;
				right:1000px;
				width:50px;
				height:20px;
			}
			*/
		</style>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>


	<!--<img src="MeiteneIkons.png" onclick="changeImage()" id="img2"> 
	<img src="ZensIkona.png" onclick="changeImage()" id="img1">
	<img src="zens.png" width="340" height="340" id="img3">
	<img src="meitene.png" width="860" height="860" id="img4">-->
	<div id="nauda">
		<div id="nauda-container">
			<?php
				$sql1 = "SELECT nauda FROM beta_lietotaji WHERE lietotajvards = '$lietotajvards'";
				$rezultats = mysqli_query($conn, $sql1);
				foreach($rezultats as $rezult_nauda){
					$nauda = $rezult_nauda['nauda'];
				};
				echo '<h1>'.number_format(($nauda/100), 2).'</h1>';
			?>
		</div>
		<div id="empty-space">
		</div>
	</div>
	<div id="gender">
		<?php
			$sql2 = "SELECT dzimums FROM beta_lietotaji WHERE lietotajvards = '$lietotajvards'";
			$result = mysqli_query($conn, $sql2);
			/*
			if($result) {
				while($row = mysqli_fetch_assoc($result)) {
					$columnValue = $row['dzimums'];
				}
			}
			*/
			foreach($result as $res){
				$current_gender = $res['dzimums'];
			};

			/*
			Dzimumi:
				0 = unknown;
				1 = zēns;
				2 = meitene;
			*/
			if($current_gender == 0){
				echo '
				<script>
					var zens = document.getElementByID("ZensImg");
					var meitene = document.getElementByID("MeiteneImg");

					zens.style.display = "none";
					meitene.style.display = "none";
				</script>
				<form method="post" action="php_script.php">
					<button id="MeiteneIkona" name="MeiteneIkona" value="2"></button>
					<button id="ZensIkona" name="ZensIkona" value="1"></button>
				</form>';
			} else if($current_gender == 1){
				echo '
				<button id="ZensImg">
				';
			} else {
				echo '
				<button id="MeiteneImg">
				'; // Lai izvadītu attēlus arā izmantoju pogas elementus, lai nebūtu iespējams uz tām bildēm uzspiest un velkāt pa visu ekrānu. Bet ja to maina caur CSS, izmanto šo elementu ID
			}
		?>

	</div>
	<div id="veikals">
		<button onclick="window.parent.location='./veikals/veikals.php'" id="cart"></button>
	</div>


	<!--<script>

			


		function changeImage() {
		var img1 = document.getElementById("img1");
		var img2 = document.getElementById("img2");
		var img3 = document.getElementById("img3");
		var img4 = document.getElementById("img4");
		
		if (event.target.id == "img1") {
			img1.style.display = "none";
			img2.style.display = "none";
			img3.style.display = "block";
			
		} else if (event.target.id == "img2") {
			img1.style.display = "none";
			img2.style.display = "none";
			img4.style.display = "block";
			
		}
		

	}
	</script>-->

	</body>
</html> 