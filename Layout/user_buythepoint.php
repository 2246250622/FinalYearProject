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
    
    }else{ 
    
    while($row= mysqli_fetch_array($result))
    
    $Point=$row['Point'];
    
    $email = $_SESSION['Email'];
    
    
    }
    
    ?>

   

       <?php include('../Component/normal_Navbar.php');
 if (isset($_POST["submit"])) { 
  $sql33 = "SELECT * FROM code WHERE Token_Code = '$_POST[PointCode]' ";
  $result=mysqli_query($conn, $sql33);
  $error = mysqli_error($conn);
  
  if ($error !=""){
  }else{ 
  while($row= mysqli_fetch_array($result))
  $Amount=$row['Name_Code']; 
  }

                  if ($error =="") {
                      $total = mysqli_num_rows($result);
                  if ($total > 0){
                    $newpoint = $Amount  +  $Point;
                    $sql = "UPDATE user SET Point = '$newpoint' WHERE Email = '$email';";
                    $result = mysqli_query($conn, $sql);
                
                    if ($result) {  
                        echo '<script>alert("Add Point successful!");history.go(-1);</script>';
                        $sql = "DELETE FROM code WHERE Token_Code='$_POST[PointCode]';";
                    $result = mysqli_query($conn, $sql);
                        echo '<script>window.location="user_buythepoint.php";</script>';
                        }
                        else {  
                        echo '<script>alert("Add Point fail!");history.go(-1);</script>';
                        }
                  }else{
                    echo '<script>alert("Your point code is wrong. Please try again!");history.go(-1);</script>';
                      echo '<script>window.location="user_buythepoint.php";</script>';
                  }
                  }
  

 }

       
       ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <br><br><br><br><br>  <center> <table>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
					<?php

echo"<H1><b>You Stilll have ";
	echo $Point;

  echo " Point</b></H1>";
?>			
                  </tbody>


              </div>
              <br><br><br><br><br><br><br><br>
  <div class="col-3">
    <label for="PointCode" class="visually-hidden">PointCode</label>
    <input type="text" class="form-control" id="PointCode" name="PointCode" placeholder="Input your Point Code ...">
  </div>
  <br>
  <div class="col-auto">
    <button type="submit" name="submit" id="submit" class="btn btn-primary mb-3">Confirm</button>
  </div>
</form>
  </table>
</center> 


       </main>
                  <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CareHK 2022-2023</div>
                            
                        </div>
                    </div>
                </footer>
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
<?php



if (isset($_POST["gift"]))
 {

   $point = $_POST["gift"];
   
      
   
$error = mysqli_error($conn);
   
     if ($error =="") {
      if ($bids < $point) {
  echo "<script type='text/javascript'>alert('No enough point');</script>";
}else{

 $check = $bids  -  $point;
 
 $sqls = "UPDATE user SET Point= '$check' WHERE Email = '$email'";
 mysqli_query($conn, $sqls);
 
  $giftname = '';
   $a = 1000;
   $b = 2000;
   $c = 5000;
   
 if ($point == $a){
 $giftname = 'Cup';}
 if ($point == $b){
 $giftname = 'Pen';}
 if ($point == $c){
 $giftname = 'NoteBook';}
echo $giftname;



echo "<script type='text/javascript'>alert('Congratulations you take off a gift \\nPlease capscreen and contact administrators to get the gift!!! ');</script>";

        echo ("<script>location.href='$user_gift'</script>");

}
}
 }
 
 

?>
    </body>
</html>
