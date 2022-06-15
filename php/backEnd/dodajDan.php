<?php 
    $ID_case = $_POST["id"];
    $start = $_POST["start"];
    $end = $_POST["end"];
    $conn=mysqli_connect("localhost", "root", "", "dlan");
    $sql = "SELECT * FROM delavni_cas";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    
    if(mysqli_query($conn,$sql))
    {
        $sql= "UPDATE delavni_cas SET start = '$start', end = '$end' WHERE ID_casa = '$ID_case';";
        mysqli_query($conn,$sql);
        echo "<script>location.href='../dan.php'</script>";
        mysqli_close($conn);
    }


?>