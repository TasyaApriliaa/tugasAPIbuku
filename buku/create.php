<?php
include '../koneksi.php';
/**
 * @var $connection PDO
 */
//prepare query
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$abstrak = $_POST['abstrak'];

$query ="INSERT INTO buku(isbn, judul, pengarang, jumlah, tanggal, abstrak)
VALUES ('$isbn', '$judul', '$pengarang', '$jumlah', '$tanggal', '$abstrak')";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);

//jalankan query
$results = $statement->fetchAll();
//output json
header('Content-Type: application/json');
echo json_encode($results);