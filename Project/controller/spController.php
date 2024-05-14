<?php
    require_once('../model/userModel.php');
    require_once('validations.php');

    $role = $_REQUEST['role'];
    $name = $_REQUEST['name'];
    $bio = $_REQUEST['bio'];

    if($role == "" || $name == "" || $bio == ""){
        echo "Null sp role/name/bio";
    } else {

        $data = ['role'=> $role, 'name'=>$bio, 'bio'=> $bio];
        $status = createSP($data);
        if($status){
            echo "<script>alert('Update successful');</script>";
            echo "<script>window.location.href='../view/splistMGT.php';</script>";
            exit;
        }else{
            echo "<script>alert('Update failed!');</script>";
        }
        
    }
?>