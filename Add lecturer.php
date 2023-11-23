<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Lecturer Details</title>
</head>
<body style="color:white; background-color:#1d301d">

    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Lecturers </strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form method="POST" action="insertlecturer.php" id="lecturer-form" class="row justify-content-center mb-4">
                <div class="col-10 mb-3">
                    <label for="lecName">Name</label>
                    <input class="form-control" id="lecName" type="text" name="lecName" placeholder="Enter Name">
                </div>
                <div class="col-10 mb-3">
                    <label for="lecSubject">Subject</label>
                    <input class="form-control" id="lecSubject" type="text" name="lecSubject"placeholder="Enter Subject">
                </div>
                <div class="col-10 mb-3">
                    <label for="lecEmail">Email</label>
                    <input class="form-control" id="lecEmail" type="text" name="lecEmail"placeholder="Enter email">
                </div>
                <div class="col-10">
                    <input class="btn btn-success add-btn" type="submit" value="Add">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>