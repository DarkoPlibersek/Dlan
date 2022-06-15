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
    $sql1 = "SELECT ID_casa, Dan, TIME_FORMAT(start, '%h:%i %p') start, TIME_FORMAT(end, '%h:%i %p') end FROM delavni_cas";
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
        $row = mysqli_fetch_assoc($result1);


        echo "
        <tr class='flex'>
            <td>" . $row['Dan'] . "</td>
        </tr>
        <tr class='flex'>
        <form action='./backEnd/dodajDan.php' method='POST'>
            <td> <input type='text' name='start' value='" . $row['start'] . "'> ---- </td>
            <td> <input type='text' name='end' value='" . $row['end'] . "'> 
            <input type='hidden' name='id' value='" . $row['ID_casa'] . "'></td>
        </tr>
        <tr>
            <td>
                <input class='opt' type='submit' value='Update'>
            </form>
            </td>
        </tr>
        
        ";


        $x++;
    } while ($x <= $stStolpcev1);

    echo "</table><br>";
    ?>
</body>

</html>