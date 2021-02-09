<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/auth.css">
    </head>
    <body>

        <div class="container-fluid" id="loginform">
            <h2 id="logintitle">
                Login
            </h2>
            <form action="auth.php"  class="was-validated" method="POST">
                <div class="form-group">
                  <label for="uname">Username:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" required>
                  
                </div>

                <div class="form-group">
                    <label for="pwd">Tel:</label>
                    <input type="tel" class="form-control" id="pwd" placeholder="Enter Telephone Number" name="pswd" required>
                    
                  </div>

                  <div class="form-group">
                    <label for="pwd">Residence:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter Residence" name="pswd" required>
                    
                  </div>


                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
                  
                </div>

                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
                    
                  </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <br>

                <a href="login.html" class="info" id="signuplink">Have an account ?,Login here </a>
              </form>
            
        </div>
       
        <script src="../bootstrap/js/bootstrap.min.js" async defer></script>
        <script src="../bootstrap/jquery.min.js" async defer></script>
    </body>
</html>