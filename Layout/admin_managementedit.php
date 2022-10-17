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
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit User's Information
                            </div>
                            <div class="card-body">

                            <?php
                            if(isset($_GET['id'])){
                                $id=$_GET['id'];
                                $users = "SELECT * FROM user WHERE ID ='$id'";
                                $users_run = mysqli_query($conn, $users);

                                if(mysqli_num_rows($users_run) > 0){
                                        foreach($users_run as $user){
                                            ?>


                                <form action="">
                                <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="fname" value="<?=$user['FName'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" name="lname" value="<?=$user['LName'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                            <label for="">Phone</label>
                                            <input type="text" name="phone" value="<?=$user['Phone'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                            <label for="">Email</label>
                                            <input type="text" name="email" value="<?=$user['Email'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                            <label for="">Certificates</label>
                                            <input type="text" name="certificates" value="<?=$user['Certificates'];?>" class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" value="<?=$user['Description'];?>" class="form-control"><?=$user['Description'];?></textarea>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                            <label for="">Role</label>
                                            <select name="role" required class="form-control">
                                            <option value="<?=$user['Role'];?>"><?=$user['Role'];?></option>
                                            <option value="normal">Normal User</option>
                                            <option value="caretaker">Caretaker</option>
                                            <option value="admin">Administrator</option>
                                            </select>
                                    </div>


                                    <div class="col-md-6 mb-3">
                                            <label for="">Status</label>
                                            <select name="status" required class="form-control">
                                            <option value="<?=$user['Status'];?>"><?=$user['Status'];?></option>
                                            <option value="Unapproved">Unapproved</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Banned">Banned</option>
                                    </div>


                                    <div class="col-md-12 mb-3">
                                            <button type="submit" name="update_user"  class="btn btn-primary">Save</button>
                                    </div>


                                    </div>



                                </form>
                                <?php
                                        }
                                    }else
                                    {
                                        ?>
                                        <h4>No Record Found</h4>
                                        <?php
                                    }
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
