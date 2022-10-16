<?php  
session_start();
include "../Layout/config.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);

	if (empty($email)) {
		header("Location: ../Layout/signin.php?error=Email is Required");
	}else if (empty($password)) {
		header("Location: ../Layout/signin.php?error=Password is Required");
	}else {

		
        $sql = "SELECT  * FROM user WHERE Email='$email' AND Password='$password'";
        $result = mysqli_query($conn, $sql);
		//echo "mysqli_num_rows($result)";
        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['Password'] === $password) {
        		$_SESSION['ID'] = $row['ID'];
        		$_SESSION['FName'] = $row['FName'];
        		$_SESSION['LName'] = $row['LName'];
        		$_SESSION['Email'] = $row['Email'];
				$_SESSION['Role'] = $row['Role'];
				$_SESSION['Gender'] = $row['Gender'];

  if($row['Role'] == 'admin'){
	header("Location: admin_homepage.php");
  }else if($row['Role'] == 'caretaker'){
  	header("Location: caretaker_homepage.php");
  }else{
    header("Location: user_homepage.php");
  }


        	}else {
        		header("Location: ../Layout/signin.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: ../Layout/signin.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: ../Layout/signin.php");
}


?>