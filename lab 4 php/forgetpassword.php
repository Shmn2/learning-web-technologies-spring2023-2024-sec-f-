<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
</head>
<body>
    <div style="padding: 10px; text-align: left;">
        <h1>Welcome to X company</h1>
        <div style="padding: 10px; text-align: right;">
            <a href="mylogin.php" style="margin-right: 20px;">Login</a>
            <a href="myhome.php" style="margin-right: 20px;">Home</a>
            <a href="myregistration.php">Registration</a>
        </div>
    </div>

    <div style="margin-top: 100px; text-align: center;">
        <form method="post" action="forgotPassword.php">
            <fieldset>
                <legend>Enter Your Email</legend>
                <label for="email" style="font-weight: bold;">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                
                <input type="submit" value="Submit">
                
            </fieldset>
        </form>
    </div>

    <div style="padding: 10px; position: fixed; bottom: 0; width: 100%; text-align: center;">
        &copy; Copyright 2017
    </div>
</body>
</html>
