
<?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:index.php?pesan=gagal");
    }

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    Politeknik negeri jember
    </title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/icons.min.css">

    <!-- Plugin -->
    <link rel="stylesheet" href="./libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
    <link rel="stylesheet" href="./libs/datatable/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="./libs/rating/css/rating-themes.css">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand">


    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
                        <a href="index.html">
                <img src="./images/logo.png" alt="Protend logo">
                <a>Desition tree - ID3</a>
            </a>
            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="simlebar-sc" data-simplebar>
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
                            <a href="penilaian.php">
                                Penilaian Skripsi
                            </a>
                        </li>
                        <li>
                            <a href="data_mahasiswa.php">
                                Data mahasiswa
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="project.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-bolt'></i>
                        <span>Settings</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <li>
                            <a href="profile_mahasiswa.php">
                                profile
                            </a>

                        </li>
                      
                        <li>
                            <a href="Logout_mahasiswa.php">
                                Logout
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
        </div>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
        <!-- Main Header -->
        <div class="main-header">
            <div class="d-flex">
                <div class="mobile-toggle" id="mobile-toggle">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="main-title">
                    
                </div>
            </div>
    
            <div class="d-flex align-items-center">
    
                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
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
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    
                <div class="dropdown d-inline-block mt-12">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="./images/profile/profile.png"
                                alt="Header Avatar">
                            <span class="pulse-css"></span>
                           
                            <span class="info d-xl-inline-block  color-span">
                                <span class="d-block fs-20 font-w600"><b><?php echo $_SESSION['username']; ?><??></b></span>
                               
                            </span>
                                
                            <i class='bx bx-chevron-down'></i>
                        </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span>My Wallet</span></a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                        <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span>Lock screen</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="user-login.html"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header -->

    <!-- MAIN CONTENT -->
    <div class="main">
        <div class="main-content user">
            <div class="row">
                <div class="col-9 col-xl-12">
                    <div class="box card-box mb-20">
                        <div class="icon-box bg-color-1">
                            <div class="icon bg-icon-1">
                                <i class='bx bxs-briefcase'></i>
                            </div>
                           
                       
                <div class="col-3 col-xl-12">
                    <div class="box user-pro-list overflow-hidden mb-30">
                        <div class="box-body">
                            <div class="user-pic text-center">
                                <div class="avatar ">
                                    <img src="./images/profile/user-profile.png" alt="">
                                    <div class="pulse-css"></div>
                                </div>
                                <div class="pro-user mt-40">
                                <span class="d-block fs-20 font-w600"><b><?php echo $_SESSION['username']; ?><??></b></span>
                                   
                                    <div class="star-ratings start-ratings-main mb-10 clearfix">
                                        <div class="stars stars-example-fontawesome star-sm">
                                            <div class="br-wrapper br-theme-fontawesome-stars">
                                                <select id="example-fontawesome" name="rating" style="display: none;"><option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4" selected="">4</option> <option value="5">5</option> </select>
                                        
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="box-body pt-19">
                            <div class="row">
                                <div class="col-4 text-center mb-0 pd-0">
                                    <div class="icon-box">
                                        <i class='bx bxs-briefcase'></i>
                                    </div>

                                    <h5 class="fs-14 font-w400 mb-0">Total Project</h5>
                                    <h5 class="mb-2"> <span class="fs-14 font-w600 ">55 +</span> </h5>
                                </div>
                                <div class="col-4  text-center mb-0 pd-0">
                                    <div class="icon-box">
                                        <i class='bx bxs-shopping-bags'></i>
                                    </div>

                                    <h5 class="fs-14 font-w400 mb-0">Total Task</h5>
                                    <h5 class="mb-2"> <span class="fs-14 font-w600">35 +</span> </h5>
                                </div>
                                <div class="col-4 text-center mb-0 pd-0">
                                    <div class="icon-box">
                                        <i class='bx bxs-trophy'></i>
                                    </div>

                                    <h5 class="fs-14 font-w400 mb-0">Awards</h5>
                                    <h5 class="mb-2"> <span class="fs-14 font-w600 ">03</span> </h5>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer pt-38">
                            <div class="btn-list text-center">
                                <a href="#" class="btn btn-light"><i class='bx bxs-envelope' ></i> </a>
                                <a href="#" class="btn btn-light"> <i class='bx bxs-phone-call'></i> </a>
                                <a href="#" class="btn btn-light"><i class='bx bxs-error-circle' ></i></a>
                                <a href="#" class="btn btn-light"> <i class='bx bxs-message-alt-edit'></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="box left-dot pt-39 mb-30">
                        <div class="box-header  border-0 ">
                            <div class="box-title fs-20 font-w600">Basic Info</div>
                        </div>
                        <div class="box-body pt-16 user-profile">
                            <div class="table-responsive">
                                <table class="table mb-0 mw-100 color-span">
                                    <tbody>
                                        <tr>
                                            <td class="py-2 px-0"> <span class="w-50">Employee ID</span> </td>
                                            <td>:</td>
                                            <td class="py-2 px-0"> <span class="">#365900</span> </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-0"> <span class="w-50">Designation</span> </td>
                                            <td>:</td>
                                            <td class="py-2 px-0"> <span class="">Sr. Designer</span> </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-0"> <span class="w-50">Department</span> </td>
                                            <td>:</td>
                                            <td class="py-2 px-0"> <span class="">Development</span> </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-0"> <span class="w-50">Join Date</span> </td>
                                            <td>:</td>
                                            <td class="py-2 px-0"> <span class="">25 - 12 - 2022</span> </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-0"> <span class="w-50">Phone Number</span> </td>
                                            <td>:</td>
                                            <td class="py-2 px-0"> <span class="">+11 05986 2359 03</span> </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-0"> <span class="w-50">Status</span> </td>
                                            <td>:</td>
                                            <td class="py-2 px-0"> <span class="badge badge-success">Active</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="box left-dot">
                        <div class="box-header  border-0 ">
                            <div class="box-title fs-20 font-w600">Statistics</div>
                        </div>
                        <div class="box-body pt-10 ">
                            <div class="d-flex justify-content-between mt-10">
                                <div class="progress-cicle">
                                    <div class="chart-circle chart-circle-xl" data-value="0.75" data-thickness="5" data-color="#E6154E"><canvas width="80" height="80"></canvas><canvas width="80" height="80"></canvas>
                                        <div class="chart-circle-value">45%</div>
                                    </div>
                                    <div class="title-progress fs-15 font-w600 mt-10">Task</div>
                                </div>
                                <div class="progress-cicle">
                                    <div class="chart-circle chart-circle-xl" data-value="0.75" data-thickness="5" data-color="#3C21F7"><canvas width="80" height="80"></canvas><canvas width="80" height="80"></canvas>
                                        <div class="chart-circle-value">55%</div>
                                    </div>
                                    <div class="title-progress fs-15 font-w600 mt-10">Projects</div>
                                </div>
                                <div class="progress-cicle">
                                    <div class="chart-circle chart-circle-xl" data-value="0.75" data-thickness="5" data-color="#E58911"><canvas width="80" height="80"></canvas><canvas width="80" height="80"></canvas>
                                        <div class="chart-circle-value">75%</div>
                                    </div>
                                    <div class="title-progress fs-15 font-w600 mt-10">Performanance</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="./libs/jquery/jquery.min.js"></script>
    <script src="./libs/jquery/jquery-ui.min.js"></script>
    <script src="./libs/moment/min/moment.min.js"></script>
    <script src="./libs/apexcharts/apexcharts.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./libs/peity/jquery.peity.min.js"></script>
    <script src="./libs/chart.js/Chart.bundle.min.js"></script>
    <script src="./libs/owl.carousel/owl.carousel.min.js"></script>
    <script src="./libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="./libs/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="./js/countto.js"></script>
    <script src="./libs/date-picker/datepicker.js"></script>
    <script src="./libs/rating/js/custom-ratings.js"></script>
    <script src="./libs/rating/js/jquery.barrating.js"></script>
    <script src="./libs/circle-progress/circle-progress.min.js"></script>
    <script src="./libs/simplebar/simplebar.min.js"></script>


    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/datepicker.js"></script>
    <script src="./js/pages/chart-circle.js"></script>


</body>

</html>