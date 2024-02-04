<?php
session_start();
 include 'config/koneksi.php';

 $us = $_POST['username'];
 $pw = md5($_POST['password']);

 $sql = "SELECT * FROM user WHERE username='$us' AND password='$pw'";
 $query = mysqli_query($conn,$sql);
 if(mysqli_num_rows($query)==1 ) {
    $tampil = mysqli_fetch_array($query);
    echo "<script language='javascript'>
    alert('Anda Berhasil Login !');
    window.location='kasir';
    </script>
    ";
    $_SESSION['id_admin']= $tampil['id_admin'];
    $_SESSION['nama_admin']= $tampil['nama_admin'];
    $_SESSION['jenis_kelamin']= $tampil['jenis_kelamin'];
    $_SESSION['ttl']= $tampil['ttl'];
    $_SESSION['alamat']= $tampil['alamat'];
    $_SESSION['username']= $tampil['username'];
    $_SESSION['password']= $tampil['password'];
    $_SESSION['telp']= $tampil['telp'];
    $_SESSION['foto']= $tampil['foto'];
 }else{
     echo "<script language='javascript'>
     alert('Maaf, Periksa Kembali Username & Password Anda !');
     window.location='index.php';
     </script>
     ";
 }
?>