<?php
    include_once'connect.php';

    $StuId=$_POST['StudentId'];
    $FirstNa=$_POST['FirstName'];
    $LastNa=$_POST['LastName'];
    $Course=$_POST['Course'];
    $Email=$_POST['Email'];

    $sql = "INSERT INTO student (StudentId,FirstName,LastName,Course,Email) VALUES('$StuId','$FirstNa','$LastNa','$Course',' $Email');";

    $result = mysqli_query($conn, $sql);

    header("Location:Add Student.php?addstudent=success");
?>