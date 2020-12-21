<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include './Koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

$data = mysqli_fetch_assoc($login);

// cek jika user login sebagai admin
if($data['role']=="User"){
// buat session login dan username
$_SESSION['username'] = $username;
$_SESSION['role'] = "User";
// alihkan ke halaman dashboard admin
header("location: dashboard.php");

}else{
// alihkan ke halaman login kembali
header("location:index.php?pesan=gagal");
}
}else{
header("location:index.php?pesan=gagal");
}
