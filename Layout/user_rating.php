<!DOCTYPE html>
<html lang="en">
    <head>

    <link rel="stylesheet" href="../css/chatbot2.css" >
    <link rel="stylesheet" href="../css/chatbot3.css" >
    <!-- data -->
   
    <script src="../chatbox.js" ></script>
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    </head>
    <body class="sb-nav-fixed">
    <?php 
    session_start();
    require('../Layout/config.php');

    $id = $_SESSION['ID'];
    $sql = "select * from rating where ID_User = '$id' and Rate = 'NULL'" ;
    $ls = mysqli_query($conn, $sql);
    ?>



    <p class="copyright" hidden>
        <span id="date"></span>.
      </p>




       <?php include('../Component/normal_Navbar.php');?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container py-4">


    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Rating and Comment</h1>
        <p class="col-md-8 fs-4">You can provide ratings (1-100) and positive or negative comments. The reviews and suggestions received from you will greatly help to improve the quality of service.<h6>**Click the button below to see what others have comment.**</h6></p>
        <button class="btn btn-primary btn-lg" type="button">View comments</button>
      </div>
    </div>
    <center><div style="width:90%;"> <?php include('../Layout/message.php')?> </div></center>
    <div class="row align-items-md-stretch">
   <?php while ($row = mysqli_fetch_array($ls)){
      echo"<div class='col-md-6'>";
      echo"<form action='../Layout/caretaker_accepthandle.php' method='POST'>";
      echo"<div class='h-100 p-5 text-bg-dark rounded-3'>";
      echo"<h2>Order ID: {$row["ID_Question"]}</h2>";
      echo"<label for='score' class='form-label' id='rangeValue'>Rating</label> ";
      echo"Score (1-100)<input type='range' class='form-range' min='0' max='100' step='1' id='score' name='score' oninput='rangeValue.innerText = this.value'>";
      echo"<p>Comment Area</p>";
      echo"<textarea id='comment' name='comment' rows='4' cols='64' placeholder='Input your comment here...'></textarea><br><br>";
      echo"<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Show Detail</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
      echo"<button type='submit' name='submit_comment' value='{$row["ID_Question"]}' class='btn btn-secondary' data-bs-toggle='modal' >Submit</button>";
      echo"</form>";
      echo"</div>";
      echo"</div>";


                             #<!-- Modal -->
                        echo"<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>";
                        echo"<div class='modal-dialog'>";
                        echo"<div class='modal-content'>";
                        echo"<div class='modal-header'>";
                        echo"<h5 class='modal-title' id='staticBackdropLabel'>Order {$row["ID_Question"]}</h5>";
                        echo"<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                        echo"</div>";
                        echo"<div class='modal-body'>";

                        $sql = "select * from question where ID_Question = {$row["ID_Question"]}" ;
                        $list = mysqli_query($conn, $sql);

                        

                        while ($lists = mysqli_fetch_array($list)){

                          $sqliii = "select * from user where ID = {$lists["ID_Caretaker"]}" ;
                        $carelist = mysqli_query($conn, $sqliii);
                        while ($carelists = mysqli_fetch_array($carelist)){
                            $Date_of_birth = $carelists["DateofBirth"];
                            $Gender = $carelists["Gender"];
                            $Phone = $carelists["Phone"];
                            $Email = $carelists["Email"];
                        }

                        echo"<fieldset><legend>Caretaker Detail</legend>";
                        echo"Name of Caretaker&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["caretaker"]}<br />";
                        echo"Date of Birth of Caretaker&nbsp;&nbsp;&nbsp;:$Date_of_birth<br />";
                        echo"Gender of Caretaker&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $Gender<br />";
                        echo"Phone of Caretaker&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:$Phone<br />";
                        echo"Email of Caretaker&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:$Email<br />";
                        
    
                        echo"</fieldset><br><br><br>";

                            echo"<fieldset><legend>Order Detail</legend>";
                            echo"Type of care&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["type_of_care"]}<br />";
                            echo"Kind of help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["kind_of_help"]}<br />";
                            echo"Location&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["location"]}<br />";
                            echo"Age of target&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["how_old"]}<br />";
                            echo"Describe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["describe"]}<br />";
                            echo"Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$lists["status"]}<br />";
        
                            echo"</fieldset>";
                        }

                                echo"</div>";
                                echo"<div class='modal-footer'>";
                                echo"<button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Close</button>";
                                echo"</div></div></div></div>";



   }?>
      
    </div>


  </div>

                
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
