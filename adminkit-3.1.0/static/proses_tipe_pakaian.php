<?php
    require_once 'dbkoneksi.php';
?>
<?php
$_id = $_POST['id'];
$_tipe = $_POST['tipe'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_id; // ? 1
$ar_data[] = $_tipe; // ? 2


if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO tipe_pakaian (id,tipe) VALUES (?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; 
   $sql = "UPDATE tipe_pakaian SET id=?,tipe=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:tipe_pakaian.php');
?>



