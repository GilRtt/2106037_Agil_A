<?php

include './koneksi.php';

$namapendaftar = $_POST['nama_pendaftar'];
$email = $_POST['e-mail'];
$tanggallahir = $_POST['tgllahir'];
$jeniskelamin = $_POST['jenis_kelamin'];
$nosim = $_POST['no_sim'];
$merekkendaraan = $_POST['merek_kendaraan'];
$nomorplat = $_POST['nomor_plat'];

$query = "insert into pendaftar values(null,'$namapendaftar','$email','$tanggallahir','$jeniskelamin','$nosim','$merekkendaraan','$nomorplat')";

mysqli_query($koneksi, $query);

header("Location: ./indek.php");
exit;
