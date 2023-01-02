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

<br><br><br><br><br><br><br><br>
<main style="margin-left:320px;">
    <h1>Welcome! <b><u>Mr/Ms <?php echo $row['LName']; ?></u></b></h1>
    <p class="fs-5 col-md-8">“Too often we underestimate the power of a touch, a smile, a kind word, a listening ear, an honest compliment, or the smallest act of caring, all of which have the potential to turn a life around.” — <b>Leo Buscaglia, author</b> <br><b style="color:red;font-size:40px;"> Therefore, we are here for you.</b></p>


    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-6">
        <ul class="icon-list">
          <li class="text-muted">Searching caregiver profiles and limiting the results to specific requirements.</li>
          <li class="text-muted">Posting Jobs with your care needs and requirements so interested caregivers can apply.</li>
          <li class="text-muted">Send direct messages to potential candidates</li>
          <li class="text-muted">Run additional background checks</li>
          <li class="text-muted">Access recommendations from previous families</li>
          <li class="text-muted">Pay caregivers you’ve hired securely</li>
        </ul>
      </div>

      
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




   
       <?php include('../Component/caretaker_Navbar.php');?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                
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
    </body>
</html>
