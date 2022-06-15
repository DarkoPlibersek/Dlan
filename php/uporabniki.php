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
    $connUporabniki = mysqli_connect("localhost", "root", "", "uporabniki");
    if (isset($_GET['id'])) {
        $id_uporabniki = $_GET['id'];
        $delete = mysqli_query($connUporabniki, "DELETE FROM uporabniki WHERE id = $id_uporabniki");
    }
    
    $sql1 = "SELECT Dan, TIME_FORMAT(start, '%h:%i %p') start, TIME_FORMAT(end, '%h:%i %p') end FROM delavni_cas";
    $sql2 = "SELECT * FROM podjetje";
    $sql3 = "SELECT * FROM ponujena_dela";

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
        $row = mysqli_fetch_assoc($resultUporabniki);

        echo "
        <tr class='flex'>
            <td>Mail: " . $row['mail'] . " </td>
        </tr>
        <tr class='flex'>
            <td>Geslo: " . $row['geslo'] . " </td>
        </tr>
        <tr>
            <td>
            <a href='?id=" . $row['id'] . "' class='opt'>Delete</a>
            </td>
        </tr>";

        $x++;
    } while ($x <= $stStolpcevUporabniki);

    echo "
    <form action='./backEnd/dodajAdmina.php' method='POST'>
        <tr>
            <td><label>Mail: </label></td>
            <td><input type='text' name='mail'></td>
        </tr>
        <tr>
            <td><label>Geslo: </label></td>
            <td><input type='text' name='geslo'></td>    
        </tr>
        <tr>
            <td><input type='submit' value='Potrdi'></td>
        </tr>
    </from>";

    echo "</table>";
    ?>
</body>

</html>