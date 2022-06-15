<?php

    include ("PB.php");

    $ID = $_POST["ID_Dela"];
    $vrsta = $_POST["vrsta_dela"];

    $sql = "INSERT INTO dela (ID_dela, vrsta_dela)
            VALUES ('$ID', '$vrsta')";

    if (mysqli_query($conn, $sql))
    {
        header("location: storitve.php");
    };

    mysqli_close($conn);

?>