
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/dlan.css" />
    <style>
        .podjetniskeSlike{
            width: 100%;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
        }
        .container2{
            text-align: center;
            width: 30%;
            height:min-content;
            margin: 1%;
            padding: 1%;
            border: 5px solid black;
            border-radius: 50px;
            font-size: 50px;
            font-weight: bold;
        }
        #cenetr{
            text-align: center;
            font-weight:1000;
            font-size: 22px;
            font-family: 'Courier New', Courier, monospace;
        }
        #frame{
            width: 100%;
            height: min-content;
            text-align: center;
            color: white;
            padding: 5%;
            background-color: rgb(48, 48, 48);
        }
        .navigacija,
        address{
            font-family:none;
        }
    </style>
</head>

<body id="cenetr">
    <header>
        <img class="logo" src="../images/slike/logo.png" alt="logo">
        <nav>
            <ul class="navigacija">
                <li><a href="../index.html">Domov</a></li>
                <li><a href="./o_podjetju.php">O podjetju</a></li>
                <li><a href="./storitve.php">Storitve</a></li>
                <li><a href="./informacije.php">Informacije</a></li>
                <li><a href="./kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
        <a href="./backEnd/login.html"><img class="login" src="../images/slike/login.jpg" alt="login"></a>    
    </header>


    <div id="frame">
        S sodobno tehnologijo vaši organizaciji omogočamo učinkovito in stabilno poslovanje.
        Poskrbimo za razvoj programske opreme po meri naročnika, za integracijo obstoječih aplikativnih rešitev z rajrazličenjšimi sistemi v podjetjih in za dodelavo programske opreme.
        Tukaj smo zato, da vas pri prehodu v digitalno dobo podpremo. Z razvojem inovativnih in naprednih rešitev soustvarjamo poslovni ekosistem prihodnosti.
    </div>


    <?php
    $conn = mysqli_connect("localhost", "root", "", "dlan");
    $sql = "SELECT * FROM podjetje ORDER BY ime_podjetja";
    mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);
    $stStolpcev = mysqli_num_rows($result);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    echo "<br>POSLOVNI PARTNERJI:";
    echo "<div class='container'>";
    $x = 1;
    do {
        $row = mysqli_fetch_assoc($result);
        $corImagePath = ("../images/galerija/" . $row['ime_podjetja'] . ".jpg");

        echo '<div class="container2">
        <ol>', $row['ime_podjetja'], '</ol>
        <img class="podjetniskeSlike" src="' . $corImagePath . '" alt="Image here" />
        </div>';

        

        $x++;
    } while ($x <= $stStolpcev);
    echo "</div>";

    ?>

    <footer>
        <address style="font-weight: 100;">dlan d.o.o. | created by Minea Peer</address>
    </footer>
</body>

</html>
