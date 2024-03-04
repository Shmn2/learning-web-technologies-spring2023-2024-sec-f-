<!DOCTYPE html>
<html lang="en">
<head>

<div style="padding: 10px; text-align: left;">
        <h1>Welcome to X company</h1>
        <div style="padding: 10px; text-align: right;">
            <a href="login.php" style="margin-right: 20px;">Login</a>
            <a href="myhome.php" style="margin-right: 20px;">Home</a>
            <a href="myregistration.php">Registration</a>
        </div>
    </div>
</head>
<body>
  
    <div style="margin-top: 50px; text-align: center;">
        <form action="#" method="post">
            <fieldset>
                <legend>Registration</legend>
                <table style="margin: auto;">
                    <tr>
                        <td><label for="name" style="font-weight: bold;">Name:</label></td>
                        <td><input type="text" id="name" name="name"></td>
                    </tr>
                    <tr>
                        <td><label for="email" style="font-weight: bold;">Email:</label></td>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><label for="username" style="font-weight: bold;">Username:</label></td>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password" style="font-weight: bold;">Password:</label></td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><label for="confirm_password" style="font-weight: bold;">Confirm Password:</label></td>
                        <td><input type="password" id="confirm_password" name="confirm_password"></td>
                    </tr>
                    <tr>
                        <td><label for="gender" style="font-weight: bold;">Gender:</label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="dob" style="font-weight: bold;">Date of Birth:</label></td>
                        <td><input type="date" id="dob" name="dob"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>

    <!-- Footer -->
    <div style="padding: 10px; position: fixed; bottom: 0; width: 100%; text-align: center;">
        &copy; Copyright 2017
    </div>
</body>
</html>
