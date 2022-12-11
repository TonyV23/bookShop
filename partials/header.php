<?php 
    include "../global/function.php";
?>
<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="generator" content="">
            <title>Online Library</title>
            <link rel="canonical" href="">
            <link rel="stylesheet" href="style.css">


            <!-- Bootstrap core CSS -->
            <link href="../asset/css/simple-datatables-style.css" rel="stylesheet" />
            <link href="../asset/css/styles.css" rel="stylesheet" />
            <script src="../asset/js/font-awesome-5-all.min.js" crossorigin="anonymous"></script>
            
            <!-- Favicons -->
            <link rel="apple-touch-icon" href="" sizes="180x180">
            <link rel="icon" href="" sizes="32x32" type="image/png">
            <link rel="icon" href="" sizes="16x16" type="image/png">
            <link rel="manifest" href="">
            <link rel="mask-icon" href="" color="#7952b3">
            <link rel="icon" href="">
            <meta name="theme-color" content="#7952b3">

        </head>

    <?php 
        if(isAdminLogin()){
    ?>
    <body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../admin/index.php">Library System</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="setting.php">Setting</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="../admin/category.php">Category</a>
                        <a class="nav-link" href="../admin/author.php">Author</a>
                        <a class="nav-link" href="../admin/location_rack.php">Location Rack</a>
                        <a class="nav-link" href="../admin/book.php">Book</a>
                        <a class="nav-link" href="../admin/user.php">User</a>
                        <a class="nav-link" href="../admin/issue_book.php">Issue Book</a>
                        <a class="nav-link" href="../admin/logout.php">Logout</a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">      
                </div>
            </nav>
        </div>
    </div>
    
    <?php 
        }
        else
        {
    ?>    
            
        
    <body>
        <main>
            <div class="container py-4">
                <header class="pb-3 mb-4 border-bottom">
                    <a href="../home/index.php" class="d-flex align-item-center text-dark text-decoration-none">
                        <span class="fs-4">Library Management System</span>    
                    </a>
                </header>
                <?php 
                    }
                 ?>              
            </div>     
        </main>
      
    </body>

</html>