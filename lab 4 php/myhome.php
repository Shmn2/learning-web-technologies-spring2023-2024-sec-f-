<?php

    session_start();

    if(!isset($_SESSION['flag'])){
        header('location: mylogin.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Welcome to X company</title>
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
</body>
</html>
