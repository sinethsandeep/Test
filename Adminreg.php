<!DOCTYPE html>
<html>

    <head> <link rel="stylesheet" href="style.css"> </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
<form method="POST" action="register.php" >
    <div class="border">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="Name" id="name" required>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  
  
      <p>Click Register</a>.</p>
      <button class="btn btn-primary" type="submit" class="registerbtn">Register</button>
    </div>
  
    <div class="container signin">
      <p>Already have an account? <a href="adminlog.php">Login</a>.</p>
    </div>
  </form>
</html>