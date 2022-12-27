<?php
// mengaktifkan session php
session_start();
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/icons.min.css">

    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/custom.css">
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
                    <a href="index.html" class="sidebar-menu-dropdown">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>
                        <div class="dropdown-icon">
                            <i class='bx bx-chevron-down'></i>
                        </div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                    <?php
                        include 'koneksi.php';
                        $username = $_SESSION['username'];
                        $sql   = "select * from mahasiswa where username = '$username' ";
                        $q     = mysqli_query($koneksi, $sql);
                        while ($r = mysqli_fetch_array($q)) {
                        $id_matkul2         = $r['id_matkul'];
                    }
                        
                        $sql2   = "select * from mata_kuliah WHERE id_matkul = $id_matkul2";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $rowcount=mysqli_num_rows($q2);
                        $urut   = 1;
                        if($rowcount > 0){ 
                            $ada = true;
                        }
                            else
                        { 
                            $ada = false;
                        }
                        ?>
                    <li>
                            <a class=<?php echo ($ada == true) ? 'disable-links' : 'clear'; ?> href="input_nilai.php">
                                Input data
                            </a>
                        </li>
                        <li>
                            <a href="cek_status_mahasiswa.php">
                                Cek status
                            </a>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-submenu">
                    <a href="project.html" class="sidebar-menu-dropdown current-menu-item">
                        <i class='bx bxs-bolt'></i>
                        <span>Setting</span>
                        <div class="dropdown-icon"><i class='bx bx-chevron-down'></i></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content active">
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
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary h-100" type="submit"><i class='bx bx-search-alt' ></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="btn dropdown-toggle" id="header-lang-img">
                            EN 
                            <i class='bx bx-caret-down'></i>
                        </span>
                    </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                        <img src="./images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="./images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="./images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                        <img src="./images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="./images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>
            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
            </div> -->
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
<h1>Tegar karunia ilham</h1>
    <div class="card">
            <div class="card-title mb-0 fs-22">
                Data  Nilai
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">logika algoritma</th>
                            <th scope="col">matematika Diskrit</th>
                            <th scope="col">wokshop tertanam</th>
                            <th scope="col">wk_pcv</th>
                            <th scope="col">sistem_cerdas</th>
                            <th scope="col">wk_cerdas</th>
                            <th scope="col">file</th>
                            <th scope="col">status</th>
                            <th scope="col">Opsi</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $username = $_SESSION['username'];
                        $sql   = "select * from mahasiswa where username = '$username' ";
                        $q     = mysqli_query($koneksi, $sql);
                        while ($r = mysqli_fetch_array($q)) {
                        $id_matkul2         = $r['id_matkul'];
}
                        
                        $sql2   = "select * from mata_kuliah WHERE id_matkul = $id_matkul2";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_matkul         = $r2['id_matkul'];
                            $logika_algoritma        = $r2['logika_algoritma'];
                            $matematika_Diskrit       = $r2['matematika_Diskrit'];
                            $wk_sistemtertanam     = $r2['wk_sistemtertanam'];
                            $wk_pcv   = $r2['wk_pcv'];
                            $sistem_cerdas     = $r2['sistem_cerdas'];
                            $wk_sistem_cerdas  = $r2['wk_sistem_cerdas'];
                            $file     = $r2['file'];
                         

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $logika_algoritma ?></td>
                                <td scope="row"><?php echo $matematika_Diskrit ?></td>
                                <td scope="row"><?php echo $wk_sistemtertanam ?></td>
                                <td scope="row"><?php echo $wk_pcv ?></td>
                                <td scope="row"><?php echo $sistem_cerdas ?></td>
                                <td scope="row"><?php echo $wk_sistem_cerdas ?></td>
                                <td scope="row"><?php echo $file ?></td>
                                <td scope="row">Diterima</td>

                                <td><a href="document_view.php?id_file=,?php echo$sb['id_file']?>" class="btn btn-warning" title="Ubah"style="box-shadow: 8px ">Ubah</a></td>
                                <td><a href="document.php?Url=<?php echo 'Document/'. $r2['file'];?>" class="btn btn-warning" title="View File"style="box-shadow: 8px ">View</a></td>
                              
                    
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
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
    <script src="./libs/simplebar/simplebar.min.js"></script>

    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>