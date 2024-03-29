<?php 
    require_once('db.php');

    function login($username, $password, $usertype){
        $con = dbConnection();
        $sql = "select * from login where username='{$username}' and password='{$password}' and usertype='{$usertype}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from login";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){

    }

    function updateUserpass($password,$email){
        $con = dbConnection();
        $sql = "update login set password = '$password' where email = '$email'";
        if(mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


    function createUser($user){
        $con = dbConnection();
        $sql = "insert into login values('', '{$user['username']}',  '{$user['password']}','{$user['email']}', '{$user['usertype']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){

    $con = dbConnection();
    $sql = "DELETE FROM login WHERE id = $id";
    if(mysqli_query($con, $sql)){

        return true;
    } else {

        return false;
    }
}
function getUserdetails($username) {
    $con = dbConnection();
    $sql = "select * FROM login WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $name = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($name, $row);
    }
    return $name;
}

    

    function updateUser($user){

    }

?>