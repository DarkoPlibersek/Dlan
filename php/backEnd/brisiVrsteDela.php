<?php 
    $vrsta_dela = $_POST["vrsta_dela"];
    $conn=mysqli_connect("localhost", "root", "", "dlan");
    $sql = "SELECT vrsta_dela FROM ponujena_dela";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    $sql= "DELETE FROM ponujena_dela WHERE ID_dela = ";
    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        echo "<script>location.href='../admin.php'</script>";
    }
?>