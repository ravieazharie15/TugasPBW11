<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dosen_dt";

$con=mysqli_connect($server,$username,$password,$database);
if (!$con){
    //jika koneksi gagal hentikan semua proses
    die("tidak dapat membuat koneksi dengan server database!");
}else{
   // echo("koneksi berhasil");
}

//koneksi dan memilih database di server
function db_disconnect($con){
    //menutup koneksi
    mysqli_close($con);
}
?>