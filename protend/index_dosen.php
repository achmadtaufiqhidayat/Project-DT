<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Protend - Project Management Admin Dashboard HTML Template
    </title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
  
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/icons.min.css">

    <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./login-dosen/login-formmodal/dist/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand counter-scroll">

    <!-- SIDEBAR -->
    <!-- <div class="sidebar">
        <div class="sidebar-logo">
                        <a href="index.html">
                <img src="./images/logo.png" alt="Protend logo">
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div> -->
        <!-- SIDEBAR MENU -->
        <!-- <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="index.html" class="sidebar-menu-dropdown current-menu-item">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                        <div class="dropdown-icon">
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content active">
                        <li>
                            <a href="index.html">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="user-profile.html">
                                User Profile
                            </a>
                        </li>
<li>
                            <a href="index.php">
                                 Login
                            </a>
                        </li>
                        <li>
                            <a href="new-account.html">
                               New Account
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="project.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-bolt'></i>
                        <span>Project</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="project.html">
                               Project
                            </a>
                        </li>
                        <li>
                            <a href="project-details.html">
                                Project Details
                            </a>
                        </li>
                        <li>
                            <a href="new-project.html">
                                New Project
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-submenu">
                    <a href="clients.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-user'></i>
                        <span>Client</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                                                <li>
                            <a href="clients.html">
                               Manager Client
                            </a>
                        </li>
                        <li>
                            <a href="client-details.html">
                                Client Details
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="board.html">
                        <i class='bx bxs-dashboard'></i>
                        <span>Board</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class='bx bx-calendar'></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="message.html">
                        <i class='bx bxs-message-rounded-detail' ></i>
                        <span>Message</span>
                    </a>
                </li>
                <li class="sidebar-submenu">
                    <a href="chart-apex.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-component' ></i>
                        <span>Components</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="chart-apex.html">
                                Apex Charts
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>

                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div> -->
        <!-- END SIDEBAR MENU -->
    <!-- </div> -->
    <!-- END SIDEBAR -->
        <!-- Main Header -->
        <div class="main-header">
            <div class="d-flex">
                <!-- <div class="mobile-toggle" id="mobile-toggle">
                    <i class='bx bx-menu'></i>
                </div> -->
                <div class="main-title" style="text-align:center">
                    Project DT
                </div>
            </div>
    
            <!-- <div class="d-flex align-items-center"> -->
    
                <!-- App Search-->
                <!-- <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>
                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='bx bx-search-alt' ></i>
                        </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
    
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
    
                <div>
                    <button class="btn header-item" aria-haspopup="true" aria-expanded="false">
                    <a href="index_mahasiswa.php" >
                            <span id="header-lang-img" >
                                Login sebagai Mahasiswa 
                            </span>
                    </a>
                    </button>
                </div>
                <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                </div> -->
                <!-- <div class="dropdown d-inline-block mt-12">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="./images/profile/profile.png"
                                alt="Header Avatar">
                            <span class="pulse-css"></span>
                            <span class="info d-xl-inline-block  color-span">
                                <span class="d-block fs-20 font-w600">Randy Riley</span>
                                <span class="d-block mt-7" >randy.riley@gmail.com</span>
                            </span>
                                
                            <i class='bx bx-chevron-down'></i>
                        </button>
                    <div class="dropdown-menu dropdown-menu-end"> -->
                        <!-- item-->
                        <!-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span>My Wallet</span></a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span>Lock screen</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="user-login.html"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Logout</span></a>
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
        <!-- End Main Header -->

    <!-- MAIN CONTENT -->
    <!-- <div class="main"> -->

        <div class="main-content">
            <section class="login">
                <!-- <div class="row">
                    <div class="col-6 text-center">
                        <div class="box">
                            <div class="box-header d-flex "> -->
                                <!-- <a href="index.html">
                                    <img src="./images/logo.png" alt="">
                                </a>-->
                                <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>
                                
                                <!-- <div class="action-reg">
                                    <h4 class="fs-30">Login Dosen</h4>
                                    <a href="new-account.html">Sign in to your account</a>
                                </div>
    
                            </div>
                            <div class="line"></div>
                            <div class="box-body">
                                <div class="auth-content my-auto">
    
                                    <form class="mt-5 pt-2" action="cek_login.php" method="post">
                                        <div class="mb-24">
                                            <label class="form-label mb-14">Username</label>
                                            <input type="text" class="username" name="username" placeholder="Username" required="required">
                                        </div>
                                        <div class="mb-16">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <label class="form-label mb-14">Password</label>
                                                    <input type="password" name="password" class="form_login" placeholder="Password" required="required">
                                                </div>
                                               
                                            </div>
    
                                
                                        </div>
                        
    
                                        </div> -->
                <div class="form">
                <div class="form-toggle"></div>
                <div class="form-panel one">
                <div class="form-header">
                    <h1>Login Dosen</h1>
                </div>
                <div class="form-content">
                    <form action="cek_login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required="required" placeholder="masukkan username" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required="required" placeholder="********" />
                    </div>
                    <!-- <div class="form-group">
                    <label class="form-remember">
                        <input type="checkbox"/>Remember Me
                    </label><a class="form-recovery" href="#">Forgot Password?</a>
                    </div> -->
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                    </form>
                </div>
                </div>
                                        <!-- <div class="mb-3">
                                            <button class="btn bg-primary color-white w-100 waves-effect waves-light fs-18 font-w500" type="submit">Sign in</button>
                                        </div>
                                    </form> -->
    
               
    
                                    <!-- <div class="mt-37 text-center">
    
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white">
                                                    <i class='bx bxl-facebook-square'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item text-white">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                    <i class='bx bxl-linkedin-square'></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item  text-white">
                                                    <i class='bx bxl-google-plus'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            <!-- </div>
                        </div>
                    </div>
                </div> -->
            </section>
        </div>
    <!-- </div> -->
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jquery/jquery-ui.min.js"></script>
    <script src="./libs/moment/min/moment.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/chart.js/Chart.bundle.min.js"></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/countto.js"></script>
    <script src="./libs/date-picker/datepicker.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>
    <script src="./libs/password/pass-addon.init.js"></script>


    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/datepicker.js"></script>

    <script>
    </script>
</body>

</html>