<?php

$koneksi = mysqli_connect('localhost:4306','root','','2106037_agil');

if($koneksi){
    echo"database terhubung";
    echo "<script> alert('database konek')</script>";
}