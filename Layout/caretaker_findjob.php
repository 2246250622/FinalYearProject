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
$sql = "select * from question where status = 'Matching'" ;
$ls = mysqli_query($conn, $sql);
 

?> 
<?php include('../Component/caretaker_Navbar.php');?>
            </div>
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Job Market</h1>
                            
                        <div class="card mb-4">   
                        </div>
                        <?php include('../Layout/message.php')?> 
                        <div class="card mb-4">
                         
                            <div class="card-header">
                                
                                <i class="fas fa-table me-1"></i>
                                Job List
                            </div>
                            <div class="card-body"> 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Type of Care</th>
                                            <th>Kind of Help</th>
                                            <th>Location</th>
                                            <th>How old</th>
                                            <th>Describe</th>
                                            <th>Caretaker</th>
                                            <th>Status</th>
                                            <th colspan='2'>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Order ID</th>
                                            <th>Type of Care</th>
                                            <th>Kind of Help</th>
                                            <th>Location</th>
                                            <th>How old</th>
                                            <th>Describe</th>
                                            <th>Caretaker</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    

                                        <?php

while ($row = mysqli_fetch_array($ls)){
	echo"<tr>";
	echo"<td>{$row["ID_Question"]}</td>";
	echo"<td>{$row["type_of_care"]}</td>";
	echo"<td>{$row["kind_of_help"]}</td>";
    echo"<td>{$row["location"]}</td>";
    echo"<td>{$row["how_old"]}</td>";
    echo"<td>{$row["describe"]}</td>";
    echo"<td>{$row["caretaker"]}</td>";
    echo"<td>{$row["status"]}</td>";
    echo"<td><form action='../Layout/caretaker_accepthandle.php' method='POST'><button type='submit' name='accept_order' value='{$row["ID_Question"]}' class='btn btn-danger'>Accept Order</button></form></td>";
	echo "</tr>";
}
	
?>


                                    </tbody>
                                </table>
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
