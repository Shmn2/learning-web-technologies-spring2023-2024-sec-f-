

<!DOCTYPE html>
<head>
</head>
<body>

            <div style="padding: 10px; text-align: left;">
                    <h1>Welcome to X company</h1>
                    <div style=" padding: 10px; text-align: right;">
                    <a href="mylogin.php" style=" margin-right: 20px;">Login</a>
                    <a href="myhome.php" style="margin-right: 20px;">Home</a>
                    <a href="myregistration.php" >Registration</a>
                </div>
    

            <div style="padding: 10px; position: fixed; bottom: 0; width: 100%; text-align: center;">
                &copy; Copyright 2017
            </div>

            <div style="margin-top: 100px; text-align: center;">
            <form method="post" action="loginCheck.php" enctype="">
            <fieldset>
                <legend>Registration</legend>
                               
                Username: <input type="text" name="username" value="" /> <br>
                 Password: <input type="password" name="password" value="" /> <br>
                      <input type="submit" name="submit" value="Submit" /> 
                
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label><br><br>
                
                
                <input type="button" value="Cancel"><br><br>
                
                <a href="#" style="text-decoration: none;">Forgot password?</a>
            </fieldset>
       

    </form>
</div>

<div style="padding: 10px; position: fixed; bottom: 0; left: 0; width: 100%; text-align: center;">
 Copyright 2017
</div>
</body>
</html>
