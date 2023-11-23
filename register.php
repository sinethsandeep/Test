<?php
    include_once'connect.php';

    $AdminName=$_POST['Name'];
    $Email=$_POST['email'];
    $Password=$_POST['psw'];

    $sql = "INSERT INTO adminreg (Name,email,psw) VALUES('$AdminName','$Email','$Password');";

    $result = mysqli_query($conn, $sql);

    header("Location:Adminreg.php?register=success");
?>
