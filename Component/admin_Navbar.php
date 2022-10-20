<header>
<script>
    function visitPage(){
        window.location='<?php echo $link?>';
    }
</script>

</header>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<!-- Navbar Brand-->
<a class="navbar-brand ps-3" href="admin_homepage.php">Admin Panel</a>
<!-- Sidebar Toggle-->
<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
<!-- Navbar Search-->
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" id="searchbar" name="searchbar">
  
    
</form>
<!-- Navbar-->
<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="../Layout/logout.php">Logout</a></li>
        </ul>
    </li>
</ul>
</nav>

<div id="layoutSidenav">
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <div class="sb-sidenav-menu-heading">Core Pages</div>
                <a class="nav-link" href="../Layout/admin_homepage.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Dashboard 
                </a>
                <a class="nav-link" href="../Layout/admin_management.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    User Management
                </a>
                <a class="nav-link" href="../Layout/admin_managementcode.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Code Management
                </a>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Layouts
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
          
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION["Email"]?>
        </div>
    </nav>