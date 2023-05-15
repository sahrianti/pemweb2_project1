<?php
require_once 'dbkoneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'db_toko_pakaian');
$sql = "SELECT id FROM tipe_pakaian";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Pakaian</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Tambah pakaian</h2>
        <form method="POST" action="proses_pakaian.php">
            <div class="form-group">
                <label for="id" class="form-label">id :</label>
                <input id="id" name="id" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">Nama :</label>
                <input id="nama" name="nama" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ukuran" class="form-label">Ukuran :</label>
                <input id="ukuran" name="ukuran" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="warna" class="form-label">Warna :</label>
                <input id="warna" name="warna" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stok" class="form-label">Stok :</label>
                <input id="stok" name="stok" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga" class="form-label">Harga :</label>
                <input id="harga" name="harga" type="text" class="form-control" required>
            </div>
            <div class="form-group">
            </div>
            <div class="form-group">
                <label for="tipe_pakaian_id" class="form-label">Tipe_pakaian </label>
                <?php
                echo "<select id='tipe_pakaian_id' name='tipe_pakaian_id' required='required' class='form-label'>";
                echo "<option disabled selected>Pilih Id Tipe Pakaian</option>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
                }
                echo "</select>";
                ?>
                <div class="form-group mt-4">
                    <div class="btn-group btn-group-lg" class="container">
                        <input type="submit" name="proses" class="btn btn-info form-control" value="Simpan" />
                    </div>
        </form>
    </div>
</body>

</html>