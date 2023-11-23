<?php
    include_once'connect.php';

    $LecName=$_POST['lecName'];
    $LecSubject=$_POST['lecSubject'];
    $LecEmail=$_POST['lecEmail'];

    $sql = "INSERT INTO lecturer (lecName,lecSubject,lecEmail) VALUES('$LecName','$LecSubject','$LecEmail');";

    $result = mysqli_query($conn, $sql);

    header("Location:Add lecturer.php?add=success");
?>