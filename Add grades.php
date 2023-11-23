<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Add Grades</title>
</head>
<body style="color:rgb(255, 255, 255); background-color:#301d28">

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Add Grades </strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form method="POST" action="insertgrade.php" id="addgrades-form" class="row justify-content-center mb-4">
                <div class="col-10 mb-3">
                    <label for="StuId">Student Id</label>
                    <input class="form-control" id="StuId" type="text" name="StuId" placeholder="Enter student Id">
                </div>
                <div class="col-10 mb-3">
                    <label for="StudentName">Student Name</label>
                    <input class="form-control" id="StudentName" type="text" name="StudentName" placeholder="Enter student Name">
                </div>
                <div class="col-10 mb-3">
                    <label for="StuCourse">Course</label>
                    <input class="form-control" id="StuCourse" type="text" name="StuCourse" placeholder="Enter Course">
                </div>
                <div class="col-10 mb-3">
                    <label for="Grade">Grade</label>
                    <input class="form-control" id="Grade" type="text" name="Grade" placeholder="Enter Grade">
                </div>
                <div class="col-10">
                    <input class="btn btn-warning add-btn" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>