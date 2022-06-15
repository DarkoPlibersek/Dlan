<?php

    $conn = mysqli_connect("localhost", "root", "", "dlan");

    $imePriimek = $_POST["imePriimek"];
    $telStevilka = $_POST["telStevilka"];
    $podjetje = $_POST["podjetje"];
    $vrstaDela = $_POST["vrstaDela"];
    $sporocilo = $_POST["sporocilo"];

    $sql = "INSERT INTO kont_sporocila (imePriimek, telStevilka, podjetje, vrstaDela, sporocilo) VALUES (' $imePriimek ', '$telStevilka','$podjetje','$vrstaDela',' $sporocilo')";

    if (mysqli_query($conn, $sql))
    {
        header("location: ../kontakt.php");
    };

    mysqli_close($conn);

?>