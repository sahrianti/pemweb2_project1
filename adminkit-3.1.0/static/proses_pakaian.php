<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_POST['id'];
$_nama = $_POST['nama'];
$_ukuran = $_POST['ukuran'];
$_warna = $_POST['warna'];
$_stok = $_POST['stok'];
$_harga = $_POST['harga'];
$_tipepakaianid = $_POST['tipe_pakaian_id'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_id; // ? 1
$ar_data[] = $_nama; // ? 2
$ar_data[] = $_ukuran; // ? 2
$ar_data[] = $_warna; // ? 2
$ar_data[] = $_stok; // ? 2
$ar_data[] = $_harga; // ? 2
$ar_data[] = $_tipepakaianid; // ? 2


if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO pakaian (id,nama,ukuran,warna,stok,harga,tipe_pakaian_id) VALUES (?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit'];
   $sql = "UPDATE pakaian SET id=?,nama=?,ukuran=?,warna=?,stok=?,harga=?,tipe_pakaian_id=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location:index.php');
?>



