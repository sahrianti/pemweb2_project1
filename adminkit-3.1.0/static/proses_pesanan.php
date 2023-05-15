<?php
    require_once 'dbkoneksi.php';
?>
<?php
$_id = $_POST['id'];
$_tanggal = $_POST['tanggal'];
$_pakaianid = $_POST['pakaian_id'];
$_quantity = $_POST['quantity'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_id; // ? 1
$ar_data[] = $_tanggal; // ? 2
$ar_data[] = $_pakaianid; // 3
$ar_data[] = $_quantity;


if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO pesanan (id,tanggal,pakaian_id,quantity) VALUES (?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; 
   $sql = "UPDATE pesanan SET id=?,tanggal=?,pakaian_id=?,quantity=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:pesanan.php');
?>



