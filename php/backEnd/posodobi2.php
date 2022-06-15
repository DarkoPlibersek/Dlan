<?php 
    include ("PB.php");

    $ID = $_POST["ID_Dela"];
    $vrsta = $_POST["vrsta_dela"];

    $sql = "UPDATE dela 
            SET vrsta_dela = '$vrsta',
            WHERE ID_dela = '$ID'; ";

    if (mysqli_query($conn, $sql))
    {
        header("location: storitve.php");
    };

    mysqli_close($conn);

?>