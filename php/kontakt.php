<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>kontakt</title>
    <link rel="stylesheet" type="text/css" href="../css/dlan.css" />
    <style>
        #sporocilo{
            width: 300px;
            height: 50px;
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

    <p>Ustanovitelji:
    <ul>
        <li>Marko Trstenjak</li>
        <li>Natalija Štecl</li>
    </ul>
    </p>

    <p>Sedež podjetja:
    <ul>
        <li>Koroška cesta 53c</li>
        <li>2000 Maribor</li>
    </ul>
    </p>

    <p>Telefonska številka:
    <ul>
        <li>T: +386 51 334 601</li>
    </ul>
    </p>
    <table>
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
        </form>
    </table>

</body>

</html>