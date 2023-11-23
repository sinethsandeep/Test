<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Attendance</title>
</head>
<body style="color:white; background-color:#2b1d30">
    
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Attendance </strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form method="POST" action="insertattendance.php" id="Attendance-form" class="row justify-content-center mb-4">
                <div class="col-10 col-md-8 mb-3">
                    <label for="StudentId">Student Id</label>
                    <input class="form-control" id="StudentId" name="StudentId" type="text" placeholder="Enter student Id">
                </div>
                <div class="col-10 col-md-8 mb-3">
                    <label for="StudentName">Student Name</label>
                    <input class="form-control" id="StudentName" name="StudentName" type="text" placeholder="Enter student Name">
                </div>
                <div class="col-10 col-md-8 mb-3">
                    <label for="Attendance">Attendance</label>
                    <input class="form-control" id="Attendance" name="Attendance" type="text" placeholder="Enter Yes or No">
                </div>
                <div class="col-10 col-md-8">
                    <input class="btn btn-success add-btn" type="submit" value="Mark">
                </div>
            </form>
           
        </div>
    </div>
</body>
</html>