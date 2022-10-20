<?php
session_start();
include('../Layout/config.php');





if(isset($_POST['delete_user'])){
    $id = $_POST['delete_user'];

    $query = "DELETE FROM user WHERE ID = '$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message']="Delete Successfully";
        header('Location: ../Layout/admin_management.php');
        exit(0);
    }else{
        $_SESSION['message']="Something Wrong";
        header('Location: ../Layout/admin_management.php');
        exit(0);
    }
}

if(isset($_POST['delete_code'])){
    $code = $_POST['delete_code'];

    $query = "DELETE FROM code WHERE ID_Code = '$code'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message']="Delete Successfully";
        header('Location: ../Layout/admin_managementcode.php');
        exit(0);
    }else{
        $_SESSION['message']="Something Wrong";
        header('Location: ../Layout/admin_managementcode.php');
        exit(0);
    }
}

if(isset($_POST['update_user'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    $query = "UPDATE user SET FName='$fname', LName='$lname', Phone='$phone', Email='$email', Description='$description', Role='$role', Status='$status' where ID='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message']="Update Successfully";
        header('Location: ../Layout/admin_management.php');
        exit(0);
    }else{
        $_SESSION['message']="Something Wrong";
        header('Location: ../Layout/admin_management.php');
        exit(0);
    }

}




?>