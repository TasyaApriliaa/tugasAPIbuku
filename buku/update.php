<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
//prepare query
$isbn = $_POST['isbn'];
$abstrak = $_POST['abstrak'];


$query ="UPDATE buku SET abstrak = ('$abstrak') WHERE isbn = ('$isbn')";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$results = $statement->fetchAll();
//output json
header('Content-Type: application/json');
echo json_encode($results);
