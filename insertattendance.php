<?php
    include_once'connect.php';

    $SId=$_POST['StudentId'];
    $SName=$_POST['StudentName'];
    $Attendance=$_POST['Attendance'];
    

    $sql = "INSERT INTO attendance (StudentId,StudentName,Attendance) VALUES('$SId','$SName','$Attendance');";

    $result = mysqli_query($conn, $sql);

    header("Location:Attendance.php?Attendance=success");
?>