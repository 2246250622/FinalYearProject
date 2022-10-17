<?php
include('../Layout/config.php');

if(isset($_POST['update_user'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    $query = "UPDATE user SET FName='$fname', LName='$lname', Phone='$phone', Email='$email', Description='$description', Role='$role', Status='$status' where ID='$id'"



}




?>