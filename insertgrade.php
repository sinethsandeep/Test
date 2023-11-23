<?php
    include_once'connect.php';

    $StudId=$_POST['StuId'];
    $StuNa=$_POST['StudentName'];
    $StuCourse=$_POST['StuCourse'];
    $Grade=$_POST['Grade'];

    $sql = "INSERT INTO grades (StuId,StudentName,StuCourse,Grade) VALUES('$StudId','$StuNa','$StuCourse',' $Grade');";

    $result = mysqli_query($conn, $sql);

    header("Location:Add grades.php?addinggrade=success");
?>