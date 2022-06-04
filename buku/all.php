<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
//prepare query
$query ="SELECT * FROM buku";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$results = $statement->fetchAll();
//output json
header('Content-Type: application/json');
echo json_encode($results);
