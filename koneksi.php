<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakweb_2023_b_213040074");
if($koneksi == TRUE){
    //echo "Berhasil Terhubung";
}else{
    echo "Gagagal Terhubung";
}