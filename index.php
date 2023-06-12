
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SKOLAI GATAVS!</title>
</head>

<body>
    <div class="titleBox">
        <div id="title">SKOLAI GATAVS!</div>
    </div>
    <div class="box">
        <button class="btn" onclick="showLoginWindow()">Ieiet</button>
        <button class="btn" onclick="showRegisterWindow()">Reģistrēties</button>
    </div>
    <div id="loginWindow">
        <div class="up">
            <button class="backBtn" onclick="hideLoginWindow()"><img class="arrow" src="bildes/arrow.png"
                    alt="back"></button>
            <h2>IEIET</h2>
        </div>
        <form action="login.php" method="post">
            <div class="inputLabels">
                <label for="username">LIETOTĀJVĀRDS:</label><br>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">PAROLE:</label><br>
                <input type="password" id="password" name="password"><br><br>
            </div>
            <input class="submit" type="submit" name="ielogoties" value="Sākam spēlēt">
        </form>
    </div>
    <div id="registerWindow">
        <div class="up">
            <button class="backBtn" onclick="hideRegisterWindow()"><img class="arrow" src="bildes/arrow.png"
                    alt="back"></button>
            <h2>REĢISTRĒTIES</h2>
        </div>
        <form id="registerForm" action="register.php" method="post">
            <div class="inputLabels">
                <label for="username">LIETOTĀJVĀRDS:</label><br>
                <input type="text" id="username" name="username"><br><br>
                <label>PAROLE:</label><br>
                <input type="password" id="registerPassword" name="password"><br><br>
                <label>PAROLE ATKĀRTOTI:</label><br>
                <input type="password" id="registerRepeatPassword" name="registerRepeatPassword"><br><br>
                <div ></div>
            </div>
            <input class="submit" type="submit" name="registreties" value="Sākam spēlēt">
        </form>
    </div>
    <div class="positionBtnAbout">
        <button class="btn" id="btnAbout" onclick="showAboutWindow()">Par spēli</button>
    </div>
    <div id="aboutWindow">
        <button class="backBtn" onclick="hideAboutWindow()"><img class="arrow" src="bildes/arrow.png"
                    alt="back"></button>
        <div class="parSpeli">
        <p>Spēle "Skolai gatavs!" ir domāta bērnudārza beidzējiem un pirmklasniekiem, kas tikai iepazīstas         ar pirmajiem priekšmetiem un gatavojas nopietnajiem skolas pārbaudījumiem.</p>
        <p>"Skolai gatavs!" ir spēle, kur ir iespējams viegli izveidot profilu, izvēlēties savu avataru un         spēlējot spēles ar primāro sākumskolas priekšmetu tematiku - matemātika un latviešu valoda, ir             iespējams krāt virtuālu naudiņu un par to apģērbt savu avataru iecienītākajos apģērba gabalos un             gūt pirmo pieredzi naudas pelnīšanā. Spēlē ir iespēja aplūkot savu statistiku, uzaicināt savus             draugus, sarakstīties ar tiem un sacensties kurš tad ir gudrākais un labākais.</p>
        <p class="sakamSpeli">Lai sākas jautrība!</p>
        <p>Spēli veidoja Liepājas universitātes 1.kursa studenti Informācijas                     tehnoloģiju fakultātē kā studiju projektu - Renārs Hartmanis, Dāvis Klasons, Amanda Vītola, Elīna         Frijāre, Madars Vagalis un Gints Kadeģis.</p>
    </div>
</div>
    <script>


        var form = document.getElementById('registerForm');
        form.addEventListener('submit', function(event) {
            var password = document.getElementById('registerPassword').value;
            var repeatPassword = document.getElementById('registerRepeatPassword').value;
            if (password !== repeatPassword) {
                event.preventDefault();
                alert('Paroles nesakrīt! Mēģini vēlreiz.');
            }
        });


        function showLoginWindow() {
            document.getElementById("loginWindow").style.display = "block";
            document.getElementById("backButton").style.display = "block";
        }
        function hideLoginWindow() {
            document.getElementById("loginWindow").style.display = "none";
            history.back();
        }
        function showRegisterWindow() {
            document.getElementById("registerWindow").style.display = "block";
            document.getElementById("registerBackButton").style.display = "block";
        }


        function hideRegisterWindow() {
            document.getElementById("registerWindow").style.display = "none";
            
            history.back();
        }

        function showAboutWindow() {
            document.getElementById("aboutWindow").style.display = "block";
            document.getElementById("aboutBackButton").style.display = "block";
        }
        function hideAboutWindow(){
            document.getElementById("aboutWindow").style.display = "none";
            history.back();
        }
    </script>
</body>

</html>