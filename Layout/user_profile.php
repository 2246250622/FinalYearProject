<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php 
    session_start();
    require('../Layout/config.php');
  

 

 $sql="select * from user where Email = '".$_SESSION['Email']."'";
$result=mysqli_query($conn, $sql);
$error = mysqli_error($conn);

if ($error !=""){
	echo $error;
}else{

while($row= mysqli_fetch_array($result))	
{
?>
   

       <?php include('../Component/normal_Navbar.php');
       if (isset($_POST["update_user"])) {
        $ID=$_POST['ID']; 
        $FName=$_POST['FName']; 
        $LName=$_POST['LName']; 
        $Phone=$_POST['Phone']; 
        $Password=$_POST['Password']; 

        $sql = "UPDATE user SET FName = '$FName', LName = '$LName', Phone = '$Phone' , Password = '$Password' WHERE ID = '$_POST[ID]';";
    $result = mysqli_query($conn, $sql);

    if ($result) {  
        echo '<script>alert("Update successful!");history.go(-1);</script>';
        echo '<script>window.location="user_profile.php";</script>';
        ;
        }
        else {  
        echo '<script>alert("Update fail!");history.go(-1);</script>';
        }
    }

       
       ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                   <center> 
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" style="width:50%">
                  
                        <br><br><br><br><br>
              
                       
                        

<div class="mb-3 row">
    <label for="ID" class="col-sm-2 col-form-label">ID</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="ID" id="ID" value="<?php echo $row['ID']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="FName" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="FName" id="FName" value="<?php echo $row['FName']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="LName" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="LName" id="LName" value="<?php echo $row['LName']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Gender" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="Gender" id="Gender" value="<?php echo $row['Gender']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="DateofBirth" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="DateofBirth" id="DateofBirth" value="<?php echo $row['DateofBirth']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Phone" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Phone" id="Phone" value="<?php echo $row['Phone']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="HKID" class="col-sm-2 col-form-label"> Hong Kong Identity Card</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="HKID" id="HKID" value="<?php echo $row['HKID']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Email" class="col-sm-2 col-form-label">Email Address</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="Email" id="Email" value="<?php echo $row['Email']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Password" id="Password" value="<?php echo $row['Password']; ?>">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="Role" class="col-sm-2 col-form-label">Role</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="Role" id="Role" value="<?php echo $row['Role']; ?>">
    </div>
  </div>


  <div class="mb-3 row">
    <label for="Point" class="col-sm-2 col-form-label">My Point</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="Point" id="Point" value="<?php echo $row['Point']; ?>">
    </div>
  </div>
  <div class="col-md-12 mb-3">
                                        <br>
                                            <button type="submit" name="update_user"  class="btn btn-primary">Save</button>
                                            </div>
                        </form>

</center> 

                        
		<?php
}
?>
		<?php
}
?>

</form>
                </main>
                  <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CareHK 2022-2023</div>
                            
                        </div>
                    </div>
                </footer><
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <!--<script src="../assets/demo/chart-pie-demo.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
        <script>





        </script>

<script>
    var Type = "";
    var What = "";
    var Where = "";
    var Who = "";
    var how_old = "";
    var how = "";
    var Ans7 = "";

function Q1(value) {
    Type = value;
    document.getElementById("Q1").style.display = "none";
    if(Type == "Senior living community"){
        document.getElementById("Q4").style.display = "block";
    }else{
        document.getElementById("Q2").style.display = "block";
    }
}

function Q2(value) {
    What = value;
    document.getElementById("Q2").style.display = "none";
        document.getElementById("Q3").style.display = "block";
   
}

function Q3(value) {
    Where = value;
    
}

function Q4(value) {
    Who = value;
    document.getElementById("Q4").style.display = "none";  
    document.getElementById("Q5").style.display = "block";
}

function Q5(value) {
    how_old = value;
    document.getElementById("Q5").style.display = "none";  
    document.getElementById("Q6").style.display = "block";
}

function Q6(value) {
    how = value;
    document.getElementById("Q6").style.display = "none";  
    document.getElementById("Q7").style.display = "block";
}

function Q7(value) {
    What = value;
    document.getElementById("Q7").style.display = "none";  
    document.getElementById("Q3").style.display = "block";
}
</script>
    </body>
</html>
