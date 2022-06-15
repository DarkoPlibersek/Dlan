<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dlan d.o.o.</title>
    <link rel="stylesheet" type="text/css" href="../css/dlan.css" />
    <style>
        .flex{
            display: flex;
            flex-wrap: wrap;
        }
        .container{
            padding: 20px;
            margin: 15px;
            border: 5px solid black;
            border-radius: 10px;
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
        <button><img class="login" src="../images/slike/login.jpg" alt="login"></a></button>
    </header>
    <div class="flex">
        <div class="container"><a class="butSize" href="./dan.php">Delavni Čas</a></div>
        <div class="container"><a class="butSize" href="./podjetje.php">Podjetja + Sedež</a></div>
        <div class="container"><a class="butSize" href="./dela.php">Opravila ki jih Opravljamo</a></div>
        <div class="container"><a class="butSize" href="./uporabniki.php">Administratorji</a></div>
    </div>
</body>

</html>