<?php 
    require_once "dbkoneksi.php";
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Pesanan</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Tambah Pesanan</h2>
    <form method="POST" action="proses_pesanan.php">
        <div class="form-group">
            <label for="id" class="form-label">Id :</label>
            <input id="id" name="id" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal" class="form-label">Tanggal  :</label>
            <input id="tanggal" name="tanggal" type="date" class="form-control" required>
        </div>
            <div class="form-group">
            <label for="pakaian_id" class="form-label">Pakaian id :</label>
            <input id="pakaian_id" name="pakaian_id" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity" class="form-label">Quantity :</label>
            <input id="quantity" name="quantity" type="text" class="form-control" required>
        </div>
    <div class="form-group mt-4">
        <div class="btn-group btn-group-lg" class="container">
            <input type="submit" name="proses" class="btn btn-info form-control" value="Simpan" />
        </div>
    </form>
</div>

</body>
</html>