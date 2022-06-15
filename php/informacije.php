<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dlan d.o.o.</title>
    <link rel="stylesheet" type="text/css" href="../css/dlan.css">
    <style>
        .flex{
            display: flex;
            flex-wrap: wrap;
        }
        .delCas{
            font-family: 'Courier New', Courier, monospace;
            font-size: 20px;
            font-weight: bold;
            margin: 2%;
            align-items: center;
            text-align: center;
            padding: 20px;
            height: min-content;
            border: 5px solid black;
            border-radius: 50px;
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
        <a href="./backEnd/login.html"><img class="login" src="../images/slike/login.jpg" alt="login"></a>   f
    </header>
    <div class="flex">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "dlan");
        $sql = "SELECT Dan, TIME_FORMAT(start, '%h:%i %p') start, TIME_FORMAT(end, '%h:%i %p') end FROM delavni_cas";
        mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql);
        $stStolpcev = mysqli_num_rows($result);
        $x = 1;
        echo "<div class='delCas'>";
        echo "ODPIRALNI ČAS:<br>--------------------------";
        do {
            $row = mysqli_fetch_assoc($result);
            echo '<ul>', $row['Dan'], "<br>", $row['start'], " - ", $row['end'], "  </ul>";
            $x++;
        } while ($x <= $stStolpcev);

        echo "</div>";
        $conn->close();
        ?>

        <div>
            <div>Location: </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2743.4307731164254!2d15.633655314833605!3d46.55894606775008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476f77b07b5b7451%3A0xd37ee98202e387e!2sKoro%C5%A1ka%20cesta%2053c%2C%202000%20Maribor!5e0!3m2!1ssl!2ssi!4v1650051140060!5m2!1ssl!2ssi" width="600" height="450" style="border:0;" allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <footer>
        <address>dlan d.o.o. | created by Minea Peer</address>
    </footer>
</body>

</html>