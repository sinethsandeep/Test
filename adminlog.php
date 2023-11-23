<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Adminlogin</title>
</head>
<body style="color:rgb(255, 255, 255); background-color:#022130">
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong> Admin Login </strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form method="POST" action="Admin.php" id="adminlogin-form" class="row justify-content-center mb-4">
                <div class="col-8 mb-3">
                    <label for="Email">Email</label>
                    <input class="form-control" id="Email" type="text" name="Email" placeholder="Enter Email">
                </div>
                <div class="col-8 mb-3">
                    <label for="Password">Password</label>
                    <input class="form-control" id="Password" type="password" name="Password" placeholder="Enter password">
                </div>
               
                <div class="col-8">
                    <input class="btn btn-secondary add-btn" type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>