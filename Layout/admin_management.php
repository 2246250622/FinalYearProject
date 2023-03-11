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
$admin = "SELECT * FROM user WHERE Role='admin'";
$admin_count = mysqli_num_rows(mysqli_query($conn, $admin));
$caretaker = "SELECT * FROM user WHERE Role='caretaker'";
$caretaker_count = mysqli_num_rows(mysqli_query($conn, $caretaker));
$normal = "SELECT * FROM user WHERE Role='normal'";
$normal_count = mysqli_num_rows(mysqli_query($conn, $normal));

$sql = "select * from user" ;
$ls = mysqli_query($conn, $sql);
?>  

<?php include('../Component/admin_Navbar.php');?>
            </div>
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">User Manangment</h1>
                            
                        <div class="card mb-4">   
                        </div>
                        <?php include('../Layout/message.php')?> 
                        <div class="card mb-4">
                         
                            <div class="card-header">
                                
                                <i class="fas fa-table me-1"></i>
                                Account DataTable
                            </div>
                            <div class="card-body"> 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Certificates</th>
                                            <th>Description</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th colspan='2'>Actions</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Certificates</th>
                                            <th>Description</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    

                                        <?php

while ($row = mysqli_fetch_array($ls)){
	echo"<tr>";
	echo"<td>{$row["ID"]}</td>";
	echo"<td>{$row["LName"]} {$row["FName"]}</td>";
	echo"<td>{$row["Phone"]}</td>";
	echo"<td>{$row["Email"]}</td>";
    echo"<td>{$row["Certificates"]}</td>";
    echo"<td>{$row["Description"]}</td>";
    echo"<td>{$row["Role"]}</td>";
    echo"<td>{$row["Status"]}</td>";
    echo"<td><a href='../Layout/admin_managementedit.php?id={$row["ID"]}' class='btn btn-success'>Edit</a></td>";
    echo"<td><form action='../Layout/admin_managementedithandle.php' method='POST'><button type='submit' name='delete_user' value='{$row["ID"]}' class='btn btn-danger'>Delete</button></form></td>";
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
