<?php 
require_once 'dbkoneksi.php';
// tangkap iddel dari url
$delete = $_GET['iddel'];
// bikin query hapus data
$sql = "DELETE FROM pakaian WHERE id=?";
// prepare query
$st = $dbh->prepare($sql);
// eksekusi query
$st->execute([$delete]);

// pindahin ke alamat list_pelanggan
header('location:index.php');

?>

