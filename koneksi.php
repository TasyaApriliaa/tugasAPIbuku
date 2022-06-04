<?php
$dbserver ='localhost';
$dbname ='buku';
$dbuser ='root';
$dbpassword ='';
$dsn ="mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new PDO($dsn,$dbuser, $dbpassword);
    echo "koneksi sukses";
}catch (Exception $exception){
    die("terjadi error: {$exception->getMessage()}");
}