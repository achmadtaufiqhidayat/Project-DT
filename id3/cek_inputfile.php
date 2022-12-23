<?php
// mengaktifkan session pada php
session_start();

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
    if (isset($_FILES['file']['name'])) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, "./Document/" . $file_name);

        $query = "INSERT INTO mata_kuliah (logika_algoritma,Matematika_Diskrit,wk_SistemTertanam,Wk_pcv,sistem_cerdas,wk_sistem_cerdas,name,file) VALUES ('$logika_algoritma','$Matematika_Diskrit','$wk_SistemTertanam','$Wk_pcv','$sistem_cerdas','$wk_sistem_cerdas','$name','$file_name')";
        $query_run = mysqli_query($koneksi, $query);
    }

        if ($query_run) 
        {
        echo '<script type="text/javascript">alert("Data saved")</script>';
        }
        else{

            echo '<script type="text/javascript">alert("Data note saved")</script>';
        }
        
    }


?>