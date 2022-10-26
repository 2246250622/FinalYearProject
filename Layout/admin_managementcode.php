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


$sql = "SELECT * FROM code ORDER BY Name_Code" ;
$ls = mysqli_query($conn, $sql);
?>  


<?php
                        
                        if(isset($_POST['add_code'])){
                            $code = $_POST['add_code'];


                            function generateRandomString($length = 8) {
                                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                                $charactersLength = strlen($characters);
                                $randomString = '';
                                for ($i = 0; $i < $length; $i++) {
                                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                                }
                                return $randomString;
                            }

                            $token = generateRandomString();
                            $point = 0;
                            $a = 100;
                            $b = 200;
                            $c = 500;
                            $d = 1000;
                            if ($code == $a){
                                $point = 100;
                            }elseif ($code == $b){
                                    $point = 200;
                                }
                                elseif ($code == $c){
                                    $point = 500;
                                }else{
                                    $point = 1000;
                                }
                            $query = "INSERT INTO code VALUES(NULL,$point,'$token')";
                            $query_run = mysqli_query($conn, $query);

                            $error = mysqli_error($conn);
                            echo $error;
                            if($query_run){
                                $_SESSION['message']="Add Code Successfully";
                                header('Location: ../Layout/admin_managementcode.php');
                                exit(0);
                            }else{
                                
                                $_SESSION['message']="Something Wrong";
                                header('Location: ../Layout/admin_managementcode.php');
                                exit(0);
                            }
                        }
                        ?>

<?php include('../Component/admin_Navbar.php');?>
            </div>
                <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Code Manangment</h1>
                            
                        <div class="card mb-4">   
                        </div>
                        
                        <br>
                        <?php include('../Layout/message.php')?> 
                        <div class="card mb-4">
                         
                            <div class="card-header">
                                
                                <i class="fas fa-table me-1"></i>
                                Account DataTable
                            </div>
                            <div class="card-body"> 
                            <form method="POST" onsubmit="return confirmPoint()">
                        <button type="submit" name="add_code" id="add_code" value=100 class="btn btn-primary">+100Point Code</button>
                        <button type="submit" name="add_code" id="add_code" value=200 class="btn btn-secondary">+200Point Code</button>
                        <button type="submit" name="add_code" id="add_code" value=500 class="btn btn-success">+500Point Code</button>
                        <button type="submit" name="add_code" id="add_code" value=1000 class="btn btn-danger">+1000Point Code</button>
                        </form>

                        <br>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID Code</th>
                                            <th>Name Code</th>
                                            <th>Token</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>ID Code</th>
                                        <th>Name Code</th>
                                        <th>Token</th>
                                        <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    

                                        <?php

while ($row = mysqli_fetch_array($ls)){
	echo"<tr>";
	echo"<td>{$row["ID_Code"]}</td>";
	echo"<td>{$row["Name_Code"]}</td>";
	echo"<td>{$row["Token_Code"]}</td>";
    echo"<td><form action='../Layout/admin_managementedithandle.php' method='POST'><button type='submit' name='delete_code' value='{$row["ID_Code"]}' class='btn btn-danger'>Delete</button></form></td>";
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
