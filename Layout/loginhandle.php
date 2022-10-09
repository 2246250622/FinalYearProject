<?php
session_start();
    header("Content-type: text/html; charset=utf-8");
	$_SESSION['email'] = $_POST['email']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
   $conn = new mysqli('localhost','root','','fypdb');
    if ($conn->connect_error){
        echo 'fail!';
        exit(0);
    }else{
        if ($email == ''){
            echo '<script>alert("Please input Email!");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("Please input password!");history.go(-1);</script>';
            exit(0);
        }
        $sql = "SELECT * FROM user WHERE Email  = '$_POST[email]' and Password = '$_POST[password]'";
        $type =  "SELECT Type FROM user WHERE Email  = '$_POST[email]' and Password = '$_POST[password]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
        if ($number) {
            if($type==0){
            echo '<script>window.location="../Layout/homepage_user.php";</script>';
            }elseif($type==0){
                echo '<script>window.location="../Layout/homepage_caretaker.php";</script>';
            }else{
                echo '<script>window.location="../Layout/homepage_admin.php";</script>'; 
            }
        } else {
            echo '<script>alert("User email or password is wrong!");history.go(-1);</script>';
        }
    }
	?>