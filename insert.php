<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$organisasi = $_POST['organisasi'];
$divisi = $_POST['divisi'];

$query = "INSERT INTO mahasiswa (nama, nim, organisasi, divisi)
       VALUES ('$nama', '$nim', '$organisasi', '$divisi') ";

if($conn->query($query) === TRUE ) {
   header("Location: index.php");

}