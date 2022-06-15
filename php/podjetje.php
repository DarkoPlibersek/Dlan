<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .opt {
            background-color: red;
            color: white;
            font-size: 1em;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "dlan");
    
    if (isset($_GET['ID_podjetja'])) {
        $id = $_GET['ID_podjetja'];
        $delet = mysqli_query($conn, "DELETE FROM podjetje WHERE ID_podjetja = $id");
    }
    
    $sql1 = "SELECT Dan, TIME_FORMAT(start, '%h:%i %p') start, TIME_FORMAT(end, '%h:%i %p') end FROM delavni_cas";
    $sql2 = "SELECT * FROM podjetje";
    $sql3 = "SELECT * FROM ponujena_dela";

    $connUporabniki = mysqli_connect("localhost", "root", "", "uporabniki");
    $sqlUporabniki = "SELECT * FROM uporabniki";
    $resultUporabniki = mysqli_query($connUporabniki, $sqlUporabniki);
    $stStolpcevUporabniki = mysqli_num_rows($resultUporabniki);

    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);

    $stStolpcev1 = mysqli_num_rows($result1);
    $stStolpcev2 = mysqli_num_rows($result2);
    $stStolpcev3 = mysqli_num_rows($result3);

    

    $x = 1;
    echo "<a href='./admin.php'>BACK</a>";
    echo "<table style='border: 3px solid black'>";
    do {
        $row = mysqli_fetch_assoc($result2);


        echo "
        <tr style='border: 1px solid black'>
            <td>" . $row['ime_podjetja'] . "</td>
            <td>----" . $row['sedez_podjetja'] . " </td>
            <td>
            <a href='?ID_podjetja=" . $row['ID_podjetja'] . "' class='opt'>Delet</a>
            </td>
        </tr>";


        $x++;
    } while ($x <= $stStolpcev2);

    echo "
    <form action='./backEnd/dodajPodjetje.php' method='POST'>
        <tr>
            <td><label for='imageLink'>Ime Podjetja: </label></td>
            <td><input type='text' name='ime_podjetja' placeholder=' put here d.o.o'></td>
        </tr>
        <tr>
            <td><label for='imageLink'>Sedez Podjetja: </label></td>
            <td><input type='text' name='sedez_podjetja' placeholder=' put here d.o.o'></td>    
        </tr>
        <tr>
            <td><input type='submit' value='Vstavi'></td>
        </tr>
    </from>";

    echo "</table><br>";
    ?>
</body>

</html>