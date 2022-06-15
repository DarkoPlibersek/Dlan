<?php 
    $ime_podjetja = $_POST["ime_podjetja"];
    $sedez_podjetja = $_POST["sedez_podjetja"];
    $conn=mysqli_connect("localhost", "root", "", "dlan");
    $sql = "SELECT ime_podjetja, sedez_podjetja FROM podjetje";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    $sql= "INSERT INTO podjetje(ime_podjetja, sedez_podjetja) VALUES('$ime_podjetja','$sedez_podjetja')";
    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        echo "<script>location.href='../podjetje.php'</script>";
    }
?>