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
    
    $iud=$row['ID'];
    
    $email = $_SESSION['Email'];
    
    
    }
    
    ?>
    <?php
    $sql333="select Point from user where ID = '$iud'";
      $result=mysqli_query($conn, $sql333);
      $abc = mysqli_error($conn);
      
      if ($error !=""){
      echo $error;
    }else{ 
    }

    while ($rows = mysqli_fetch_assoc($result)){
      $bids = $rows['Point'];
    }
?>
   

       <?php include('../Component/normal_Navbar.php');


       
       ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <br><br><br>  <center> 
                	<?php
                  echo"<H1><b>You Stilll have ";
                  echo $bids;
                
                  echo " Point</b></H1>";
                  ?>	 <br>
<table border="3">
  <tr>
    <th><center>PlantedWoodPaperRuledNote - 5pc Pack <B style="color:Red;">(5000Point)</B></center></th>
    <th><center>Polycarbonate Ball Pen - Blue <B style="color:Red;">(2000Point)</B></center></th>
    <th><center>WhitePorcelain Mug Cup <B style="color:Red;">(1000Point)</B></center></th>

  </tr>
  <tr>
    <td><img width="100%" height="550" src="../img/PlantedWoodPaperRuledNote (5pc Pack).jpg" alt="Girl in a jacket"></td>
    <td><img width="100%" height="550" src="../img/Polycarbonate Ball Pen (Blue).jpg" alt="Girl in a jacket"></td>
    <td><img width="100%" height="550" src="../img/WhitePorcelain Mug Cup.jpg" alt="Girl in a jacket"></td>

  </tr>
  <tr>
	<form class="form-horizontal form-material" method="post" onsubmit="return confirmPoint()"  >
	 <td><center><button class="btn btn-success"  value="5000" type="sumbit" name="gift"  id='gift' tabindex="2">Redeem gifts</button></center></td>
	<td><center><button class="btn btn-success"  value="2000" type="sumbit" name="gift"  id='gift' tabindex="2">Redeem gifts</button></center></td>
	<td><center><button class="btn btn-success"  value="1000" type="sumbit" name="gift"  id='gift' tabindex="2">Redeem gifts</button></center></td>
	</form>
  </tr>
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
