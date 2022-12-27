<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

if (isset($_POST['save'])) {
    $logika_algoritma = $_POST['logika_algoritma'];
    $matematika_Diskrit = $_POST['matematika_Diskrit'];
    $wk_SistemTertanam = $_POST['wk_SistemTertanam'];
    $Wk_pcv = $_POST['Wk_pcv'];
    $sistem_cerdas = $_POST['sistem_cerdas'];
    $wk_sistem_cerdas = $_POST['wk_sistem_cerdas'];
            $name = $_FILES['file']['name'];
            $File_tmp = $_FILES['Berkas']['Tmp_name'];
    
        // $file_name = $_FILES['file']['name'];
        // $file_tmp = $_FILES['file']['tmp_name'];

        $DirUpload = "Document/";
        $LinkBerkas = $DirUpload.$name;

       $query_run= move_uploaded_file($file_tmp, $LinkBerkas);

       $query = Array(
        'logika_algoritma' => $logika_algoritma, 
        'matematika_Diskrit' => $matematika_Diskrit,
        'wk_sistemTertanam' => $wk_SistemTertanam, 
        'wk_pcv' => $wk_pcv, 
        'sistem_cerdas' => $sistem_cerdas, 
        'file' => $LinkBerkas, 
    );

        // $query = "INSERT INTO mata_kuliah (logika_algoritma,Matematika_Diskrit,wk_SistemTertanam,Wk_pcv,sistem_cerdas,wk_sistem_cerdas,name,file) VALUES ('$logika_algoritma','$Matematika_Diskrit','$wk_SistemTertanam','$Wk_pcv','$sistem_cerdas','$wk_sistem_cerdas','$name','$file_name')";
        // $query_run = mysqli_query($koneksi, $query); 
}


        if ($query_run && (($query) == 1)){ 
            echo '<script type="text/javascript">alert("Data saved")</script>'; 

        }else{
            echo '<script type="text/javascript">alert("Data note saved")</script>';

        }
        
       
       
           
        
        
    

?>