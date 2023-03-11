<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Manangment</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php 
session_start();
require('../Layout/config.php');


$id = $_SESSION['ID'];
$sql = "select * from question where ID_Caretaker = '$id'" ;
$ls = mysqli_query($conn, $sql);
 

?> 
<?php include('../Component/caretaker_Navbar.php');?>
            </div>
                <div id="layoutSidenav_content">
                <main>
                  <br>
                <center><div style="width:90%;"> <?php include('../Layout/message.php')?> </div></center>
                <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">My Jobs List</h1>
        <p class="lead text-muted">Here is a task management feature in the management web page, allowing users to track and prioritize tasks, categorize them, and receive reminders for deadlines.<br ><br >You can find more orders in the market</p>
        <p>
          <a href="../Layout/caretaker_findjob.php" class="btn btn-primary my-2">Go to the order market</a>
        </p>
      </div>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">

    <form id="filterTable" name="filter" method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">



  <button type="submit" class="btn-check" name="All" id="All" autocomplete="off"></button>
  <label class="btn btn-outline-primary" for="All"> All Orders </label>

    <button type="submit" class="btn-check" name="Unfinished" id="Unfinished" autocomplete="off"></button>
    <label class="btn btn-outline-primary" for="Unfinished">Unfinished Orders</label>

    <button type="submit" class="btn-check" name="Finished" id="Finished" autocomplete="off"></button>
    <label class="btn btn-outline-primary" for="Finished">Finished Orders</label>

</form>




</div><br><br><br>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php


//order filter
if (isset($_POST['All'])) {
  $sql = "select * from question where ID_Caretaker = '$id'" ;
  $ls = mysqli_query($conn, $sql);
} else if (isset($_POST['Unfinished'])) {
  $sql = "select * from question where ID_Caretaker = '$id' and NOT status='Done'" ;
  $ls = mysqli_query($conn, $sql);
} else if (isset($_POST['Finished'])) {
  $sql = "select * from question where ID_Caretaker = '$id' and status='Done'" ;
  $ls = mysqli_query($conn, $sql);

  //...
  //there are more 'else if' statements, but I've excluded them to maintain a clean question
  //...

} else {
  $sql = "select * from question where ID_Caretaker = '$id'" ;
  $ls = mysqli_query($conn, $sql);
}





                while ($row = mysqli_fetch_array($ls)){
                    echo"<div class='col'>";
                    echo"<div class='card shadow-sm'>";
                    echo"<img class='bd-placeholder-img card-img-top' width='100%' height='225' src='https://static.vecteezy.com/system/resources/previews/000/168/636/original/caretaker-vector-illustration.jpg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'/><text x='50%' y='50%' fill='#eceeef' dy='.3em'></text></img>";
          
                    
                    echo"<div class='card-body'>";
                    echo"<p class='card-text'>";
                    

                    echo"Order Number:{$row["ID_Question"]}<br />";
                    echo"Type of care&nbsp;&nbsp;&nbsp;&nbsp;:{$row["type_of_care"]}<br />";
                    echo"Kind of help&nbsp;&nbsp;&nbsp;&nbsp;:{$row["kind_of_help"]}<br />";
                    echo"Location&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$row["location"]}<br />";
                    echo"Age of target&nbsp;&nbsp;:{$row["how_old"]}<br />";
                    echo"Describe&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$row["describe"]}<br />";
                    echo"Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:{$row["status"]}<br />";


                    echo"</p>";
                    echo"<div class='d-flex justify-content-between align-items-center'>";
                    #<!-- Button trigger modal -->
                    echo"<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>Client Info</button>";
                    echo"<form action='../Layout/caretaker_accepthandle.php' method='POST'><button type='submit' name='finish_order' value='{$row["ID_Question"]}' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#exampleModal'>Finish Order</button></form>";
                   
                    echo" <small class='text-muted'>9 mins</small>";
                        echo"</div>";
                        echo"</div>";
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

                        $sql = "select * from user where ID = {$row["ID"]}" ;
                        $list = mysqli_query($conn, $sql);

                        while ($lists = mysqli_fetch_array($list)){
                            echo"<table>";
                            echo"<tr><td>Name:Mr/Ms {$lists["LName"]} {$lists["FName"]}</td></tr>";
                            echo"<tr><td>Gender:{$lists["Gender"]}</td></tr>";
                            echo"<tr><td>Phone:{$lists["Phone"]}</td></tr>";
                            echo"<tr><td>Email:{$lists["Email"]}</td></tr>";
                            echo"<tr><td>Description:{$lists["Description"]}</td></tr>";
                            echo"<tr><td>Contact Method:&nbsp;&nbsp;<a href='https://wa.me/{$lists["Phone"]}?text=Hello! Im Your caretaker({$row["caretaker"]})' class='btn btn-success'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-whatsapp' viewBox='0 0 16 16'><path d='M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z'/></svg> Whatsapp</a>";
                            echo"&nbsp;&nbsp;<a href='mailto: {$lists["Email"]}' class='btn btn-primary'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-envelope' viewBox='0 0 16 16'><path d='M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z'/></svg> Email</a> </td></tr>";
                            echo"</table>";
                        }

                                echo"</div>";
                                echo"<div class='modal-footer'>";
                                echo"<button type='button' class='btn btn-primary' data-bs-dismiss='modal'>Close</button>";
                                echo"</div></div></div></div>";



                        }
?>

      </div>
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
       
    </body>
</html>
