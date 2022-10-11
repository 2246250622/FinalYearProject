<?php 
   session_start();
   if (!isset($_SESSION['email']) && !isset($_SESSION['ID'])) {   ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    
<link rel="stylesheet" href="./css/chatbox.css">
    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <?php 
include('../Component/Navbar.php');
require('../Layout/config.php')
?>  

    
<main class="form-signin">
  <form action="../Layout/loginhandle.php" method="post">
    <img class="mb-4" src="../img/CareHK.jpg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <?php if (isset($_GET['error'])) { ?>  <!-- Error red alert box -->
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" name="email" autofocus="autofocus" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <label for="password">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <div class="mt-3">
                    <p class="mb-0  text-center">Don't have an account? <a href="../Layout/signup_normaluser.php"
                            class="text-primary fw-bold">Sign
                            Up</a></p>

                            <p class="mb-0  text-center">Forgot your password? <a href="../Layout/forgotpassword.php"
                            class="text-primary fw-bold">Forgot Password</a></p>
                </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-4 mb-3 text-muted">&copy; 2022–2023 </p>
  </form>

  <?php
  
  
  ?>
</main>

<?php
include('../Component/Footer.php');
?>
    
  </body>
</html>
<?php }else{
	header("Location: homepage.php");
} ?>
