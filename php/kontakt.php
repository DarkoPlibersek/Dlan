<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>kontakt</title>
    <link rel="stylesheet" type="text/css" href="../css/dlan.css" />
    <link rel="stylesheet" href="../css/kontakt.css">
    <style>
        #sporocilo {
            width: 300px;
            height: 50px;
        }

        .flexContDiv {
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 40%;
            opacity: 0;
            font-size: 45px;
            transition: .5s ease;
            text-align: center;
        }

        .flexContDiv:hover .overlay {
            opacity: 1;
        }

        .flexContDiv img {
            opacity: 1;
            transition: .5s ease;
        }

        .flexContDiv:hover img {
            opacity: 0.3;
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
    <div class="cont1">
        <div>
            <div class="naslov1">Ustanovitelji:</div>
            <ul class="flexCont">
                <div class="flexContDiv">
                    <img id="hover" style="width: 400px;" src="../images/galerija 3/Marko Trstenjak.jpg" alt="IMG">
                    <div class="overlay">Marko Trstenjak</div>
                </div>
                <div class="flexContDiv">
                    <img id="hover" style="width: 400px;" src="../images/galerija 3/Natalija Štecl.jpg" alt="IMG">
                    <div class="overlay">Natalija Štecl</div>
                </div>
            </ul>
        </div>
    </div>

    <div class="cont2">
        <div>
            <div class="naslov2">Sedež podjetja:</div>
            <ul>
                <a href="./informacije.php">
                    <li>Koroška cesta 53c</li>
                    <li>2000 Maribor</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="cont1">
        <div><div class="naslov1">Telefonska številka:</div>
            <ul>
            <li id="T">T: +386 51 334 601</li>
            <li><a href="" id="MsgHere">Or Message us Here</a></li>
            </ul>
        </div>
    </div>
    <div class="popup">
        <div class="popupForm">
            <form action="./backEnd/kontaktiVstavlanje.php" method="POST" class="form">
                <label for="imePriimek">Ime in Priimek: </label>
                <input type="text" name="imePriimek" placeholder="Exm. Minea Peer">
                <br>
                <label for="telStevilka">Telefonska številka: </label>
                <input type="text" name="telStevilka" placeholder="Exm. +386 23 456 789">
                <br>
                <label for="podjetje">Podjetje: </label>
                <input type="text" name="podjetje" placeholder="put here d.o.o">
                <br>
                <label for="vrstaDela">Vrsta dela: </label>
                <select name="vrstaDela" id="">
                    <option value="poprava strojne opreme" selected="selected" name="">poprava strojne opreme</option>
                    <option value="namescanje OS" name="">namescanje OS</option>
                    <option value="odstranitev virusov" name="">odstranitev virusov</option>
                    <option value="oblikovanje spletne strani" name="">oblikovanje spletne strani</option>
                    <option value="izdelava podatkovnih baz" name="">izdelava podatkovnih baz</option>
                </select>
                <br>
                <label for="sporocilo">Vase sporocilo: </label>
                <input type="text" name="sporocilo" id="sporocilo" placeholder="Povejte kaj si mislite">
                <br>
                <input type="submit" value="POŠLJI" id="poslji">
            </form>
        </div>
    </div>

</body>

</html>