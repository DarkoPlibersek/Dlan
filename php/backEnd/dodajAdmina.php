<?php 
    $mail = $_POST["mail"];
    $geslo = $_POST["geslo"];
    $conn=mysqli_connect("localhost", "root", "", "uporabniki");
    $sql = "SELECT mail, geslo FROM uporabniki";
    $result=mysqli_query($conn,$sql) or exit(mysqli_error($conn));
    $sql= "INSERT INTO uporabniki(mail,geslo) VALUES('$mail','$geslo')";
    if(mysqli_query($conn,$sql))
    {
        mysqli_close($conn);
        echo "<script>location.href='../uporabniki.php'</script>";
    }
?>