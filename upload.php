<?php 
include 'koneksi.php';

// mentransfer data dari ajax ke php
$nama = $_POST['nama'];
$panggilan = $_POST['panggilan'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$num = $_POST['num'];
$img = "images/avatar1.png";
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
 
mysqli_query($koneksi, "insert into user values('','$nama','$panggilan','$nim', '$num', '$alamat', '$no_telp', '$email', '$img','$prodi','$kelas')");





// data dari index.php dikirim melalui index.js(ajax) ke upload.php untuk di upload ke database

// jika database user  di foreign key dengan id_prodi dan id_kelas maka *tidak dapat dilakukan upload data ke database user*

//cara kerja penguploadan data dengan ajax ke database yang saya gunakan == index.php >> index.js(ajax) >> upload.php >> *database* >> newCard.php && newDetailCard.php >> index.js(ajax) >> index.php
