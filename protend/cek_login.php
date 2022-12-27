<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
// $login = mysqli_query($koneksi,"SELECT * FROM dosen WHERE username='$username' and password='$password'");
$login = mysqli_query($koneksi,"SELECT * FROM dosen WHERE username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['level']=="Dosen"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "Dosen";
  // alihkan ke halaman dashboard admin
  header("location:Halaman_dosen.php");

 // cek jika user login sebagai pegawai
 }else if($data['level']=="Mahasiswa"){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "Mahasiswa";
  // alihkan ke halaman dashboard pegawai
  header("location:Halaman_mahasiswa.php");

 }else{

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}

?>