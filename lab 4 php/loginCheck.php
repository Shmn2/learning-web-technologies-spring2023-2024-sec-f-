<?php
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null usernamepassword";
    }else if($username == $password){
        $_SESSION['flag'] = "true";
        header('location: myhome.php');
    }else{
        echo "invalid User!";
    }
?>