<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $database = "SSMS";

    //My SQLi connection using above parameters
    $conn = mysqli_connect($dbServer,$dbUser,$dbPass,$database);

    if($conn){
        echo "";
    }
?>