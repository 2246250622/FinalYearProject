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

       
    </head>
    <body class="sb-nav-fixed">
    <?php 
    session_start();
    require('../Layout/config.php');

    $id = $_SESSION['ID'];
    $sql = "select * from user where Role = 'caretaker'" ;
    #$sql = "select * from rating where ID_User = '$id' and Rate != 'NULL'" ;
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

                <div class="accordion" id="accordionPanelsStayOpenExample">

                <?php while ($row = mysqli_fetch_array($ls)){
                echo"<div class='accordion-item'>";
                echo"<h2 class='accordion-header' id='panelsStayOpen-headingTwo'>";
                echo"<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-{$row["ID"]}' aria-expanded='false' aria-controls='panelsStayOpen-{$row["ID"]}'>";
                echo"Mr/Ms {$row["LName"]} {$row["FName"]}";
                echo"</button>";
                echo"</h2>";
                echo"<div id='panelsStayOpen-{$row["ID"]}' class='accordion-collapse collapse' aria-labelledby='panelsStayOpen-headingTwo'>";
                echo"<div class='accordion-body'>";

                $sqli = "select * from rating where ID_Caretaker = '{$row["ID"]}' and Rate != 'NULL'" ;
                $list = mysqli_query($conn, $sqli);

                while ($rows = mysqli_fetch_array($list)){ 

                $sqliss = "select * from user where ID = '{$rows["ID_User"]}'" ;
                $listss = mysqli_query($conn, $sqliss);    
                while ($rowss = mysqli_fetch_array($listss)){ 
                    echo"<strong>Reviewer:</strong> Mr/Ms {$rowss["LName"]} {$rowss["FName"]}({$rowss["Email"]})<br>";
                 }
                echo"<strong>Score:</strong> <span style='color:#FF0000;'>{$rows["Rate"]}</span><br><strong>Comment:</strong> <br>";
                echo"<textarea disabled rows='4' cols='150'>{$rows["Comment"]}</textarea><br><br>";
            
            
            }
                echo"</div></div></div>";
                } ?>


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