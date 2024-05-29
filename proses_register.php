<?php
include 'koneksi.php'; // Pastikan file ini ada dan berisi koneksi ke database

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('$username', '$password', '$nama_petugas', '$level')";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php?pesan=berhasil_daftar");
    } else {
        header("Location: register.php?pesan=gagal_daftar");
    }
}
?>
