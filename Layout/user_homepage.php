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

    ?>
    <?php         
                
                  if (isset($_POST["location"])){
                  extract($_POST);
                  $id = $_SESSION['ID'];
                  if(empty($who_need_care)){
                    $who_need_care="Myself";
                  }

                  if(empty($how_old)){
                    $how_old="30-100’s";
                  }

                  if(empty($describe)){
                    $describe="NA";
                  }
                  $sql = "SELECT * FROM question WHERE ID = '$id' ";
                  $ls = mysqli_query($conn, $sql);

                  $error = mysqli_error($conn);
                  if ($error =="") {
                      $total = mysqli_num_rows($ls);
                  if ($total > 0){
                    echo "<script type='text/javascript'>alert('$describe');</script>";
                    $sql = "UPDATE question SET type_of_care='$type_of_care', kind_of_help='$kind_of_help', location='$location', who_need_care='$who_need_care', how_old='$how_old', descriptions='$describe' WHERE ID ='$id'";
                }else{
                  
                $sql = "INSERT INTO question VALUES(NULL,'$id','$type_of_care','$kind_of_help','$location','$who_need_care','$how_old','$describe')";
                }
                  mysqli_query($conn, $sql);
                  $error = mysqli_error($conn);
                  if ($error !=""){
                    echo $error;
                    echo "<script type='text/javascript'>alert($error);</script>";
                  }else{
                    echo "<script type='text/javascript'>alert('OK');</script>";
                   //header("Location: ../Layout/signup_caretaker.php?success=Congratulations! Your account have been successfully created.");  
                  }
                 
                }
             }
                      ?>  

       <?php include('../Component/normal_Navbar.php');?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <center>
                        <br><br><br><br><br>
                <div id="Q1">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What type of care are you interested in?</b></h2><br><br><br>
                <br><br>
                <input id="type_of_care1" name="type_of_care" onclick="Q1(value)" type="radio" value="In-home care"></input><label for="type_of_care1"><img src="../img/In-home care1.png" style="border-radius: 25px;width: 500px" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="type_of_care2" name="type_of_care" onclick="Q1(value)" type="radio" value="Senior living community"></input><label for="type_of_care2"><img src="../img/Senior living community1.png" style="border-radius: 25px;width: 500px" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="type_of_care3" name="type_of_care" onclick="Q1(value)" type="radio" value="I am not sure yet"></input><label for="type_of_care3"><img src="../img/I am not sure yet1.png" style="border-radius: 25px;width: 500px" />
                </div>

                <div id="Q2" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What kind of help are you looking for?</b></h2><br>
                <input id="kind_of_help1" name="kind_of_help" onclick="Q2(value)"type="radio"  value="Household tasks"></input><label for="kind_of_help1"><img src="../img/image_part_001" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help2" name="kind_of_help" onclick="Q2(value)"type="radio"  value="Personal care"></input></input><label for="kind_of_help2"><img src="../img/image_part_002" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help3" name="kind_of_help" onclick="Q2(value)"type="radio"  value="Companionship"></input></input><label for="kind_of_help3"><img src="../img/image_part_003" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help4" name="kind_of_help" onclick="Q2(value)"type="radio"  value="Transportation"></input></input><label for="kind_of_help4"><img src="../img/image_part_004" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help5" name="kind_of_help" onclick="Q2(value)"type="radio"  value="Specialized care"></input></input><label for="kind_of_help5"><img src="../img/image_part_005" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help6" name="kind_of_help" onclick="Q2(value)"type="radio"  value="Mobility assistance"></input></input><label for="kind_of_help6"><img src="../img/image_part_006" style="border-radius: 25px;width: 500px" /></label>
               </div>


               <div id="Q3" style="display:none;width:500px">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>Where are you looking for care?</b></h2><br>
              
                <select name="location" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">Open this select menu
                <optgroup label = "Hong Kong Island">
                <option selected value="Central and Western">Central and Western</option>
                <option  value="Eastern">Eastern</option>
                <option  value="Southern">Southern</option>
                <option  value="Wan Chai">Wan Chai</option>

                <optgroup label = "Kowloon">
                <option  value="Kowloon City">Kowloon City</option>
                <option  value="Kwun Tong">Kwun Tong</option>
                <option  value="Sham Shui Po">Sham Shui Po</option>
                <option  value="Wong Tai Sin">Wong Tai Sin</option>
                <option  value="Yau Tsim Mong">Yau Tsim Mong</option>

                <optgroup label = "New Territories">
                <option  value="Islands">Islands</option>
                <option  value="Kwai Tsing">Kwai Tsing</option>
                <option  value="North">North</option>
                <option  value="Sai Kung">Sai Kung</option>
                <option  value="Sha Tin">Sha Tin</option>
                <option  value="Tai Po">Tai Po</option>
                <option  value="Tsuen Wan">Tsuen Wan</option>
                <option  value="Tuen Mun">Tuen Mun</option>
                <option  value="Yuen Long">Yuen Long</option>
                </select>
                <button type="submit" class="btn btn-primary float-end" id="submit">Submit</button>
                </div>

                <div id="Q4" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>Who needs care?</b></h2><br><br><br>
                <br><br>
                <input id="who_need_care1" name="who_need_care" onclick="Q4(value)"type="radio" value="My parent"></input><label for="who_need_care1"><img src="../img/My parent.jpg" style="border-radius: 25px;width: 500px" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="who_need_care2" name="who_need_care" onclick="Q4(value)"type="radio" value="My spouse"></input><label for="who_need_care2"><img src="../img/My spouse.jpg" style="border-radius: 25px;width: 500px" /></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="who_need_care3" name="who_need_care" onclick="Q4(value)" type="radio" value="Myself"></input><label for="who_need_care3"><img src="../img/Myself.jpg" style="border-radius: 25px;width: 500px" /></label>
                </div>

                <div id="Q5" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>How old are they?</b></h2><br>
                <input id="how_old1" name="how_old" onclick="Q5(value)"type="radio" value="30’s"></input><label for="how_old1"><img src="../img/30.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old2" name="how_old" onclick="Q5(value)"type="radio" value="40’s"></input><label for="how_old2"><img src="../img/40.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old3" name="how_old" onclick="Q5(value)"type="radio" value="50’s"></input><label for="how_old3"><img src="../img/50.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old4" name="how_old" onclick="Q5(value)"type="radio" value="60’s"></input><label for="how_old4"><img src="../img/60.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old5" name="how_old" onclick="Q5(value)"type="radio" value="70’s"></input><label for="how_old5"><img src="../img/70.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old6" name="how_old" onclick="Q5(value)"type="radio" value="80’s"></input><label for="how_old6"><img src="../img/80.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old7" name="how_old" onclick="Q5(value)"type="radio" value="90’s"></input><label for="how_old7"><img src="../img/90.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="how_old8" name="how_old" onclick="Q5(value)"type="radio" value="100’s"></input><label for="how_old8"><img src="../img/100.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
               </div>


               <div id="Q6" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>How would you describe them?</b></h2><br>
                <input id="describe1" name="describe" onclick="Q6(value)"type="radio" value="Independent"></input><label for="describe1"><img src="../img/independent.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="describe2" name="describe" onclick="Q6(value)"type="radio" value="Needs monitoring or extra help"></input><label for="describe2"><img src="../img/needs monitoring or extra help.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="describe3" name="describe" onclick="Q6(value)"type="radio" value="Requires constant supervision"></input><label for="describe3"><img src="../img/requires contant supervision.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
               </div>

               <div id="Q7" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What kind of help that he/she is looking for?</b></h2><br>
                <input id="kind_of_help7" name="kind_of_help" onclick="Q7(value)"type="radio" value="Everyday tasks"></input><label for="kind_of_help7"><img src="../img/Everyday tasks.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help8" name="kind_of_help" onclick="Q7(value)"type="radio" value="Personal care"></input><label for="kind_of_help8"><img src="../img/Personal care.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help9" name="kind_of_help" onclick="Q7(value)"type="radio" value="Companionship"></input><label for="kind_of_help9"><img src="../img/Companionship.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help10" name="kind_of_help" onclick="Q7(value)"type="radio" value="Mobility assistance"></input><label for="kind_of_help10"><img src="../img/Mobility assistance.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                <input id="kind_of_help11" name="kind_of_help" onclick="Q7(value)"type="radio" value="Memory care"></input><label for="kind_of_help11"><img src="../img/Memory care.jpg" style="border-radius: 25px;width: 500px" /></label><br><br>
                </div>
                
                
                <?php if (isset($_GET['error'])) { ?>  <!-- Error red alert box -->
                          <div class="alert alert-danger" role="alert">
                      <?=$_GET['error']?>
                    </div>
                    <?php } ?>    
 


</center>
</form>
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

<script>
    var Type = "";
    var What = "";
    var Where = "";
    var Who = "";
    var how_old = "";
    var how = "";
    var Ans7 = "";

function Q1(value) {
    Type = value;
    document.getElementById("Q1").style.display = "none";
    if(Type == "Senior living community"){
        document.getElementById("Q4").style.display = "block";
    }else{
        document.getElementById("Q2").style.display = "block";
    }
}

function Q2(value) {
    What = value;
    document.getElementById("Q2").style.display = "none";
        document.getElementById("Q3").style.display = "block";
   
}

function Q3(value) {
    Where = value;
    
}

function Q4(value) {
    Who = value;
    document.getElementById("Q4").style.display = "none";  
    document.getElementById("Q5").style.display = "block";
}

function Q5(value) {
    how_old = value;
    document.getElementById("Q5").style.display = "none";  
    document.getElementById("Q6").style.display = "block";
}

function Q6(value) {
    how = value;
    document.getElementById("Q6").style.display = "none";  
    document.getElementById("Q7").style.display = "block";
}

function Q7(value) {
    What = value;
    document.getElementById("Q7").style.display = "none";  
    document.getElementById("Q3").style.display = "block";
}
</script>
    </body>
</html>
