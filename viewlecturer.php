<?php
    include_once'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>View</title>
</head>
<body style="color:rgb(37, 6, 6); background-color:#e6eef0">
    
<div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Lecturers </strong></h1>
        </div>
        
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">lecturer Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                
<?php 

$sql = "SELECT lecName,lecSubject,lecEmail FROM lecturer";

$result = $conn->query($sql);

if($result->num_rows > 0){

 while($row = $result->fetch_assoc()){
?>
    <tr>
        <th scope="row"><?php echo $row["lecName"]; ?></th>
        <td> <?php echo $row["lecSubject"]; ?></td>
        <td><?php echo $row["lecEmail"]; ?></td>
    </tr>
<?php
}

}

$conn->close();
?>
                
            </tbody>

        </table>

    </div>
    </div>
</body>
</html>