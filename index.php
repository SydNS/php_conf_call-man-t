<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="auth.css">
    </head>
    <body style="background-image: url('images/conf5.png')">

  
          <div class="card">


            <div class="card-body">
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
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
                  
                </div>

                
                <input type="submit" class="btn btn-primary"  id="btnlogin" name="login_submit" value="Log in"  >
                <br>
                <br>

                <a href="signup.php" class="info" id="signuplink">Create account ? </a>
              </form>
        </div>
          </div>
        </div>

        
        <script src="bootstrap.min.js" async defer></script>
        <script src="jquery.min.js" async defer></script>
    </body>
</html>