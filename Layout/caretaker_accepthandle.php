<?php
session_start();
include('../Layout/config.php');




if(isset($_POST['accept_order'])){
    $order_num = $_POST['accept_order'];
    $my_ID = $_SESSION['ID'];
    $status = 'Matched';

    $sql = "select * from user where ID = '$my_ID'" ;
    $ls = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($ls)){
       $Name = "Mr/Ms ".$row["LName"];  
    }




    $query = "UPDATE question SET ID_Caretaker='$my_ID', caretaker='$Name', status='Order Received' where ID_Question='$order_num'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message']="Accept Successfully";
        header('Location: ../Layout/caretaker_findjob.php');
        exit(0);
    }else{
        $_SESSION['message']="Something Wrong";
        header('Location: ../Layout/caretaker_findjob.php');
        exit(0);
    }

}else if(isset($_POST['finish_order'])){
    $order_num = $_POST['finish_order'];
    $status = 'Done';
    $query = "UPDATE question SET status='$status' where ID_Question='$order_num'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message']="The order number of $order_num is done";
        header('Location: ../Layout/caretaker_myjob.php');
        exit(0);
    }else{
        $_SESSION['message']="Something Wrong";
        header('Location: ../Layout/caretaker_myjob.php');
        exit(0);
    }

}else{
    echo'Something Wrong!!';
}


?>