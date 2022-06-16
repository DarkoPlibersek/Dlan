<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dlan d.o.o.</title>
    <link rel="stylesheet" type="text/css" href="../css/dlan.css" />
    <style>
        #frame {
            width: 100vw;
            height: min-content;
            text-align: center;
            color: white;
            padding: 5%;
            background-color: rgb(48, 48, 48);
            font-family: 'Courier New', Courier, monospace;
            font-weight: 1000;
            font-size: 22px;
        }

        .container img {
            width: 23%;
            padding: 1%;
            margin: 1%;
            border: solid 1px black;
            border-radius: 50px;
            height: min-content;
        }
        .mainContainer{
            text-align: center;
            align-items: center;
            font-size: 50px;
            font-weight: bold;
        }
    </style>
</head>

<body>
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
    <div id="frame"> Naše ponujene storitve:
        <br>--------------------------------------<br>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "dlan");
        $sql = "SELECT * FROM ponujena_dela";
        mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql);
        $stStolpcev = mysqli_num_rows($result);
        $x = 1;
        do {
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>" . $x . ")</td>";
            echo "<td>" . $row["vrsta_dela"] . "</td><br>";
            echo "</tr>";
            $x++;
        } while ($x <= $stStolpcev);

        echo "</div>"
        ?>
        <div class="mainContainer">
            Galerija naših del<br>
            ------------------------

            <div class="container">
                <?php

                function rasmname()
                {
                    $path = "../images/galerija 2/";
                    $images = glob($path . "*.*");
                    foreach ($images as $i) {
                        echo "<img class ='' src='" . $i . "' />";
                    }
                }
                rasmname();
                ?>
            </div>
        </div>
        <footer>
            <address>dlan d.o.o. | created by Minea Peer</address>
        </footer>
</body>

</html>