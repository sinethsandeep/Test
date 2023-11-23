<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Add Students</title>
</head>
<body style="color:white; background-color:#1baee4">
    
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Student Details </strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form method="POST" action="insertstudent.php" id="addstudent-form" class="row justify-content-center mb-4">
                <div class="col-10 mb-3">
                    <label for="StudentId">Student Id</label>
                    <input class="form-control" id="StudentId" type="text" name="StudentId" placeholder="Enter student Id">
                </div>
                <div class="col-10 mb-3">
                    <label for="FirstName">First Name</label>
                    <input class="form-control" id="FirstName" type="text" name="FirstName" placeholder="Enter First Name">
                </div>
                <div class="col-10 mb-3">
                    <label for="LastName">Last Name</label>
                    <input class="form-control" id="LastName" type="text" name="LastName" placeholder="Enter Last Name">
                </div>
                <div class="col-10 mb-3">
                    <label for="Course">Course</label>
                    <input class="form-control" id="Course" type="text" name="Course" placeholder="Enter Course Name">
                </div>
                <div class="col-10 mb-3">
                    <label for="Email">Email</label>
                    <input class="form-control" id="Email" type="text" name="Email" placeholder="Enter Email">
                </div>
                <div class="col-10">
                    <input class="btn btn-secondary add-btn" type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>