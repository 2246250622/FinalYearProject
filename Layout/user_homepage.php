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

       <?php include('../Component/normal_Navbar.php');?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <form action="" method="post">
                    <center>
                        <br><br><br><br><br>
                <div id="Q1">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What type of care are you interested in?</b></h2><br><br><br>
                <br><br>
                <button onclick="Q1(value)"type="button" style="border-radius: 25px;width: 500px" value="In-home care"><h2>In-home care</h2><img src="../img/In-home care.png"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="Q1(value)"type="button" style="border-radius: 25px;width: 500px" value="Senior living community"><h2>Senior living community</h2><img src="../img/Senior living community.png"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="Q1(value)" type="button" style="border-radius: 25px;width: 500px" value="I am not sure yet"><h2>I am not sure yet</h2><img src="../img/I am not sure yet.png"></button>
                </div>

                <div id="Q2" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What kind of help are you looking for?</b></h2><br>
                <button onclick="Q2(value)"type="button" style="border-radius: 25px;width: 500px" value="Household tasks"><h2>Household tasks</h2><h6>Errands, housekeeping and meal prep.</h6></button><br><br>
                <button onclick="Q2(value)"type="button" style="border-radius: 25px;width: 500px" value="Personal care"><h2>Personal care</h2><h6>Bathing, dressing and feeding.</h6></button><br><br>
                <button onclick="Q2(value)"type="button" style="border-radius: 25px;width: 500px" value="Companionship"><h2>Companionship</h2><h6>Sharing hobbies and lending an ear.</h6></button><br><br>
                <button onclick="Q2(value)"type="button" style="border-radius: 25px;width: 500px" value="Transportation"><h2>Transportation</h2><h6>Trips to appointments and errands.</h6></button><br><br>
                <button onclick="Q2(value)"type="button" style="border-radius: 25px;width: 500px" value="Specialized care"><h2>Specialized care</h2><h6>Memory care, use of special equipment.</h6></button><br><br>
                <button onclick="Q2(value)"type="button" style="border-radius: 25px;width: 500px" value="Mobility assistance"><h2>Mobility assistance</h2><h6>Lift, transfers, physical activity, etc.</h6></button>
               </div>


               <div id="Q3" style="display:none;width:500px">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>Where are you looking for care?</b></h2><br>
              
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">Open this select menu
                <optgroup label = "Hong Kong Island">
                <option selected value="Central and Western">Central and Western</option>
                <option onclick="Q3(value)" value="Eastern">Eastern</option>
                <option onclick="Q3(value)" value="Southern">Southern</option>
                <option onclick="Q3(value)" value="Wan Chai">Wan Chai</option>

                <optgroup label = "Kowloon">
                <option onclick="Q3(value)" value="Kowloon City">Kowloon City</option>
                <option onclick="Q3(value)" value="Kwun Tong">Kwun Tong</option>
                <option onclick="Q3(value)" value="Sham Shui Po">Sham Shui Po</option>
                <option onclick="Q3(value)" value="Wong Tai Sin">Wong Tai Sin</option>
                <option onclick="Q3(value)" value="Yau Tsim Mong">Yau Tsim Mong</option>

                <optgroup label = "New Territories">
                <option onclick="Q3(value)" value="Islands">Islands</option>
                <option onclick="Q3(value)" value="Kwai Tsing">Kwai Tsing</option>
                <option onclick="Q3(value)" value="North">North</option>
                <option onclick="Q3(value)" value="Sai Kung">Sai Kung</option>
                <option onclick="Q3(value)" value="Sha Tin">Sha Tin</option>
                <option onclick="Q3(value)" value="Tai Po">Tai Po</option>
                <option onclick="Q3(value)" value="Tsuen Wan">Tsuen Wan</option>
                <option onclick="Q3(value)" value="Tuen Mun">Tuen Mun</option>
                <option onclick="Q3(value)" value="Yuen Long">Yuen Long</option>
                </select>
                <input type="submit">
                </div>

                <div id="Q4" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What type of care are you interested in?</b></h2><br><br><br>
                <br><br>
                <button onclick="Q4(value)"type="button" style="border-radius: 25px;width: 500px" value="My parent"><h2>My parent</h2><img src="../img/My parent.png"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="Q4(value)"type="button" style="border-radius: 25px;width: 500px" value="My spouse"><h2>My spouse</h2><img src="../img/My spouse.png"></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="Q4(value)" type="button" style="border-radius: 25px;width: 500px" value="Myself"><h2>Myself</h2><img src="../img/Myself.png"></button>
                </div>

                <div id="Q5" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>How old are they?</b></h2><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="30’s"><h1>30’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="40’s"><h1>40’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="50’s"><h1>50’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="60’s"><h1>60’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="70’s"><h1>70’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="80’s"><h1>80’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="90’s"><h1>90’s</h1></button><br><br>
                <button onclick="Q5(value)"type="button" style="border-radius: 25px;width: 500px" value="100’s"><h1>100’s</h1></button><br><br>
               </div>


               <div id="Q6" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>How would you describe them?</b></h2><br>
                <button onclick="Q6(value)"type="button" style="border-radius: 25px;width: 500px" value="Independent"><h1>Independent</h1></button><br><br>
                <button onclick="Q6(value)"type="button" style="border-radius: 25px;width: 500px" value="Needs monitoring or extra help"><h1>Needs monitoring or extra help</h1></button><br><br>
                <button onclick="Q6(value)"type="button" style="border-radius: 25px;width: 500px" value="Requires constant supervision"><h1>Requires constant supervision</h1></button><br><br>
               </div>

               <div id="Q7" style="display:none">
                <h2 class="MuiTypography-root jss62 MuiTypography-h2"><b>What kind of help is your spouse looking for?</b></h2><br>
                <button onclick="Q7(value)"type="button" style="border-radius: 25px;width: 500px" value="Everyday tasks"><h2>Everyday tasks</h2><h6>Laundry and meal prep.</h6></button><br><br>
                <button onclick="Q7(value)"type="button" style="border-radius: 25px;width: 500px" value="Personal care"><h2>Personal care</h2><h6>Bathing, dressing and feeding.</h6></button><br><br>
                <button onclick="Q7(value)"type="button" style="border-radius: 25px;width: 500px" value="Companionship"><h2>Companionship</h2><h6>Sharing hobbies and lending an ear.</h6></button><br><br>
                <button onclick="Q7(value)"type="button" style="border-radius: 25px;width: 500px" value="Mobility assistance"><h2>Mobility assistance</h2><h6>Lift, transfers, physical activity, etc.</h6></button><br><br>
                <button onclick="Q7(value)"type="button" style="border-radius: 25px;width: 500px" value="Memory care"><h2>Memory care</h2><h6>Alzheimer’s, dementia or memory care.</h6></button><br><br>
                </div>
                
                
               
 


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
    document.getElementById("Q3").style.display = "none";  
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
