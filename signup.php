<!DOCTYPE html>
<html>
    <head>
      
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up</title>
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
                Sign Up
            </h2>
            <form action="auth.php"  class="was-validated" method="POST">
                <div class="form-group">
                  <label for="uname">Username:</label>
                  <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname" required>
                  
                </div>

                <div class="form-group">
                    <label for="pwd">Tel:</label>
                    <input type="tel" class="form-control" id="pwd" placeholder="Enter Telephone Number" name="tel" required>
                    
                  </div>

                  <div class="form-group">
                    <label for="pwd">Residence:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter Residence" name="residence" required>
                    
                  </div>


                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
                  
                </div>

                <div class="form-group">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd2" required>
                    
                  </div>
                
                  <input type="submit" class="btn btn-primary"  id="btnlogin" name="signup_submit" placeholder="Login" onsubmit="passwordMatch()" value="Sign Up" >
                
                  <br>
                <br>

                <a href="index.php" class="info" id="signuplink">Have an account ?,Login here </a>
              </form>
            
        </div>
          </div>
    </div>
       
        <script src="bootstrap.min.js" async defer></script>
        <script src="jquery.min.js" async defer></script>
    </body>
</html>