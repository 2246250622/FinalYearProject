<!DOCTYPE html>
<html lang="en">
    <head>

    <link rel="stylesheet" href="../css/chatbot2.css" >
    <link rel="stylesheet" href="../css/chatbot3.css" >
    <!-- data -->
   
    <script src="../chatbox.js" ></script>
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
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

<br><br><br><br><br>
<main style="margin-left:320px;" >
<div class="container-fluid px-4">
  <?php
  $number = "SELECT * FROM question WHERE ID='".$_SESSION['ID']."'";
  $number_count = mysqli_num_rows(mysqli_query($conn, $number));
  $statussql = "SELECT status FROM question WHERE ID='".$_SESSION['ID']."'";
  $status_counts = mysqli_query($conn, $statussql);
  $number_count = mysqli_num_rows(mysqli_query($conn, $statussql));

  if( $number_count!=0){
  while ($status1 = mysqli_fetch_array($status_counts)){
    $status = $status1["status"];}

  }else{
    $status = "No order";}
  
  $pointsql = "SELECT Point FROM user WHERE Email= '".$_SESSION['Email']."'";
  $point_count = mysqli_query($conn, $pointsql);
  while ($point_count1 = mysqli_fetch_array($point_count)){
    $point = $point_count1["Point"];}
  ?>
                        
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Your status:</div>
                                    <center><h1><?php echo"Online"?></h1></center>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Order status:</div>
                                    <center><h1><?php try {echo $status;} catch (Exception $e) {echo 'Don\'t have any order';}?>
                                  </h1></center>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">My Point:</div>
                                    <center><h1><?php echo $point?></h1></center>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="margin-left:40px;width:70%"> 
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000" >
      <img src="../img/caretaker_banner1.png"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color:#ff0000;">
        <h3>Welcome! <b><u>Mr/Ms <?php echo $row['LName']; ?></u></b></h3>
       
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/caretaker_banner2.png"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color:#00ffff;">

        <p>“Too often we underestimate the power of a touch, a smile, a kind word, a listening ear, an honest compliment, or the smallest act of caring, all of which have the potential to turn a life around.” — <b>Leo Buscaglia, author</b></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/caretaker_banner3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="color:#f012be;">
        <h3>Therefore, we are here for you.</h3>

      </div>
    </div>
    
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



  </main>




<?php }}?>

<button class="btn chatBtn chatToggle" id="chatToggle" style="background-color:#f44336;">Online Chat<i class="far fa-comment-alt" style="margin-left: 1rem"></i></button>
    <div class="chatbox">
      <div class="chatbox-title">
        <h4><i class="fas fa-robot" style="margin-right: 0.5rem" ></i>Online Inquiry</h4>
      </div>
      <div class="chat-container">
        <div class="reply-content">
          <span class="reply-icon" style="margin-right:0.5rem"><i class="fas fa-robot"></i></span>
          <p>You can try using self-inquiry function to answer your doubt.
            If still has any question, you can leave a message to us.
            <br/><span class="reply-time">10:55PM</span></p>
        </div>
        
      </div>

      <div class="answerbtn-group" >
        <button id="ctacAsk" class="btn chatBtn" style="background-color:#e7e7e7;">What is CareHK</button>
        <button id="searchAsk" class="btn chatBtn" style="background-color:#e7e7e7;">Reset Password</button>
        <button id="mkappAsk" class="btn chatBtn" style="background-color:#e7e7e7;">Contact US</button>
        <button id="chatBtn" class="btn chatBtn" style="background-color:#e7e7e7;">Find Admin(Online Chat)</button>
      </div>
    </div>
    
       
    <p class="copyright" hidden>
        <span id="date"></span>.
      </p>




      
    <!-- load data -->
    <script>

$(document).ready(function() {
  var date = (document.getElementById(
    "date"
  ).innerHTML = new Date().getFullYear());

  $(".chatbox").hide();
  $(document).on("click", "#ctacAsk", function(){
    appendAnswer(1);
  });
  $(document).on("click", "#searchAsk", function(){
    appendAnswer(2);
  });
  $(document).on("click", "#mkappAsk", function(){
    appendAnswer(3);
  });
  $(document).on("click", "#chatBtn", function(){
    appendAnswer(4);
  })
  $(document).on("click", "#sendMsg", function(){
    console.log("hello");
    sendMsg();
  });
  $(document).on("click", "#out", function(){
    restore();
  });
  $("#chatToggle").click(function(){
    if($(".chatbox").is(":visible")){
      $(".chatbox").fadeOut(200); 
    } else {
      $(".chatbox").fadeIn(200);
    }
  });
  $("#abc").click(function(){
    window.location.href = "./property-search.html";
  });

  
});
</script>
<!-- end of load data -->
<!-- navbar js -->













   
       <?php include('../Component/normal_Navbar.php');?>
            </div>
            
                <main>
                
                </main>
                <footer class="py-4 bg-light mt-auto" style="margin-left:320px;">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; CareHK 2022-2023</div>
                            
                        
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
    </body>
</html>
