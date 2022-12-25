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
        Politeknik negeri jember -ID3
    </title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/icons.min.css">

    <link rel="stylesheet" href="./libs/date-picker/datepicker.css">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body class="sidebar-expand counter-scroll">
            
<?
    if(isset($_SESSION['status']))
        {
            echo "<H4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
        ?>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">
                        <a href="index.html">
                <img src="./images/logo.png" alt="Protend logo">
                
                Decition tree-ID3
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
                        
                        <li>
                            <a href="input_nilai.php">
                                Input data
                            </a>
                        </li>
                        <li>
                            <a href="cek_status.php">
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
                            <a href="profile.php">
                                profile
                            </a>

                        </li>
                        <!-- <li>
                            <a href="register.php">
                                Register user
                            </a>
                        </li> -->
                        <li>
                            <a href="Logout_mahasiswa.php">
                                Logout
                            </a>
                        </li>
                    </ul>
               

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
                        <a class="dropdown-item text-danger" href="Logout_mahasiswa.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span>Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header -->

    <!-- MAIN CONTENT -->
    <div class="main">

    <div class="main-content project">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <!-- <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">NIM</label> <input
                                            class="form-control" placeholder="E412xx"> </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Nama Mahasiswa</label> <input
                                            class="form-control" placeholder="Lutfi Abdul Aziz"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Prodi:</label> <select
                                            name="attendance"
                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Prodi" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-22-9i9m">
                                            <option label="Pilih Prodi" data-select2-id="select2-data-24-ktnv"></option>
                                            <option value="1">TIF</option>
                                            <option value="2">MIF</option>
                                            <option value="3">TKK</option>
                                            <option value="4">DM</option>
                                           
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-23-72at" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-92-container"
                                                    aria-controls="select2-attendance-92-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-92-container" role="textbox"
                                                        aria-readonly="true" title="Select Department"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Jenis Kelamin:</label> <select
                                            name="attendance"
                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Select Priority" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-30-l6ni">
                                            <option label="Jenis Kelamin" data-select2-id="select2-data-32-qodq">
                                            </option>
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-31-dlj3" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-wo-container"
                                                    aria-controls="select2-attendance-wo-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-wo-container" role="textbox"
                                                        aria-readonly="true" title="Select Priority"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div> -->
                                <?php
                                include 'koneksi.php';
                                $sql3   = "SELECT id_matkul FROM mata_kuliah ORDER by id_matkul DESC";
                                $q3     = mysqli_query($koneksi, $sql3);
                                $urut   = 1;
                                $r2 = mysqli_fetch_array($q3);
                                    
                                $id_matkul2         = $r2['id_matkul']+1;
                                
                                ?>
                                <div class="col-md-6 col-sm-12 mb-24">
                                <div class="form-group"> <label class="form-label">ID Matkul</label> <input
                                        value="<?=$id_matkul2?>"    class="form-control" disabled  name="id_matkul" placeholder="ID Matkul"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    
                                    <form action="input_nilai.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        
                                    <label class="form-label">Jenis Matakuliah: Mata Kuliah Dasar</label> 

                                    
                                    <select



                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Mata Kuliah" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-38-9jkg">
                                            
                                            <option>Logika dan Algoritma</option>
                                         
                                            <!-- <option value="3">Mata Kuliah Inti</option> -->
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-39-684b" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-8z-container"
                                                    aria-controls="select2-attendance-8z-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-8z-container" role="textbox"
                                                        aria-readonly="true" title="Enter Client"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>

                                    
                                    </div>
                                    
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Nilai</label> 
                                    <input name="logika_algoritma" class="form-control" maxlength="4" onkeyup="oneDot(this)" placeholder="Tulis nilai anda"> </div>
                                </div>





                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> 
                                        <!-- <label class="form-label">Jenis Matakuliah: Mata Kuliah Dasar</label>  -->
                                        <select

                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Mata Kuliah" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-38-9jkg">
                                           
                                            <option>Matematika Diskrit</option>
                                            <!-- <option value="3">Mata Kuliah Inti</option> -->
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-39-684b" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-8z-container"
                                                    aria-controls="select2-attendance-8z-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-8z-container" role="textbox"
                                                        aria-readonly="true" title="Enter Client"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <input name="Matematika_Diskrit" class="form-control" maxlength="4" onkeyup="oneDot(this)" placeholder="Tulis nilai anda"> </div>
                                </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Jenis Matakuliah: Mata Kuliah Pendukung</label> <select
                                           



                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Mata Kuliah" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-38-9jkg">
                                            
                                            <option >WK Sistem Tertanam</option>
                                          
                                            <!-- <option value="3">Mata Kuliah Inti</option> -->
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-39-684b" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-8z-container"
                                                    aria-controls="select2-attendance-8z-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-8z-container" role="textbox"
                                                        aria-readonly="true" title="Enter Client"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                

                                </div>
                               
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Nilai</label> 
                                    <input name="wk_SistemTertanam" class="form-control" maxlength="4" onkeyup="oneDot(this)" placeholder="Tulis nilai anda"> </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> 
                                        <!-- <label class="form-label">Jenis Matakuliah: Mata Kuliah Dasar</label>  -->
                                        <select
                                        


                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Mata Kuliah" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-38-9jkg">
                                           
                                            <option >WK PCV</option>
                                            <!-- <option value="3">Mata Kuliah Inti</option> -->
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-39-684b" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-8z-container"
                                                    aria-controls="select2-attendance-8z-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-8z-container" role="textbox"
                                                        aria-readonly="true" title="Enter Client"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <input name="Wk_pcv" class="form-control" maxlength="4" onkeyup="oneDot(this)" placeholder="Tulis nilai anda"> </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Jenis Matakuliah: Mata Kuliah Inti</label> <select
                                         

                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Mata Kuliah" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-38-9jkg">
                                            
                                            <option >Sistem Cerdas</option>
                                           
                                            <!-- <option value="3">Mata Kuliah Inti</option> -->
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-39-684b" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-8z-container"
                                                    aria-controls="select2-attendance-8z-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-8z-container" role="textbox"
                                                        aria-readonly="true" title="Enter Client"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> <label class="form-label">Nilai</label> 
                                    <input name="sistem_cerdas" class="form-control" maxlength="4" onkeyup="oneDot(this)" placeholder="Tulis nilai anda"> </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <div class="form-group"> 
                                        <!-- <label class="form-label">Jenis Matakuliah: Mata Kuliah Dasar</label>  -->
                                        <select
                                           


                                            class="form-control custom-select select2 select2-hidden-accessible"
                                            data-placeholder="Pilih Mata Kuliah" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-38-9jkg">
                                          
                                            <option >WK Sistem Cerdas</option>
                                            <!-- <option value="3">Mata Kuliah Inti</option> -->
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr"
                                            data-select2-id="select2-data-39-684b" style="width: 100%;"><span
                                                class="selection"><span
                                                    class="select2-selection select2-selection--single" role="combobox"
                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                    aria-disabled="false"
                                                    aria-labelledby="select2-attendance-8z-container"
                                                    aria-controls="select2-attendance-8z-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-attendance-8z-container" role="textbox"
                                                        aria-readonly="true" title="Enter Client"></span>
                                                    <span class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span>
                                                </span>
                                            </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 mb-24">
                                    <input name="wk_sistem_cerdas" class="form-control" maxlength="4" onkeyup="oneDot(this)" placeholder="Tulis nilai anda"> </div>
                                </div>
                            </div>   

                                <div class="form-group">
                                    <label>Upload File Skripsi</label>
                                    <input type="text" class="form-control" name="name"placeholder="Enter your name" required>
                                    <input class="form-control" type="file" name="file">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit" name="save">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <script>
        function oneDot(input) {
            var value = input.value,
            value = value.split('.').join('');

        if (value.length > 2) {
        value = value.substring(0, value.length - 2) + '.' + value.substring(value.length - 2, value.length);
        }

        input.value = value;
    }
    </script>
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


    <!-- APP JS -->
    <script src="./js/main.js"></script>
    <script src="./js/shortcode.js"></script>
    <script src="./js/pages/datepicker.js"></script>

    <script>
    </script>
</body>




</html>

<?php


// menghubungkan php dengan koneksi database
include 'koneksi.php';

if (isset($_POST['save'])) {
    $logika_algoritma = $_POST['logika_algoritma'];
    $Matematika_Diskrit = $_POST['Matematika_Diskrit'];
    $wk_SistemTertanam = $_POST['wk_SistemTertanam'];
    $Wk_pcv = $_POST['Wk_pcv'];
    $sistem_cerdas = $_POST['sistem_cerdas'];
    $wk_sistem_cerdas = $_POST['wk_sistem_cerdas'];
    $name = $_POST['name'];
    $username = $_SESSION['username'];
    if (isset($_FILES['file']['name'])) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, "./Document/" . $file_name);

        $query = "INSERT INTO mata_kuliah (id_matkul,logika_algoritma,Matematika_Diskrit,wk_SistemTertanam,Wk_pcv,sistem_cerdas,wk_sistem_cerdas,name,file) VALUES ($id_matkul2,'$logika_algoritma','$Matematika_Diskrit','$wk_SistemTertanam','$Wk_pcv','$sistem_cerdas','$wk_sistem_cerdas','$name','$file_name')";
        $query_run = mysqli_query($koneksi, $query);

        $query2 = "UPDATE mahasiswa SET id_matkul = $id_matkul2 WHERE username = '$username' ";
        $query_run2 = mysqli_query($koneksi, $query2);
    }

        if ($query_run && $query_run2) 
        {
        echo '<script type="text/javascript">alert("Data Berhasil di simpan")
            window.location.href = "cek_status.php" 
        </script>';
        }
        else{

            echo '<script type="text/javascript">alert("Data Gagal di simpan")</script>';
        }
        
    }


?>