<?php
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM pakaian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>
<div class="content-wrapper">
    <section class="content">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="proses_pakaian.php">
                    <div class="form-group row">
                        <label for="id" class="col-4 col-form-label">Id</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="id" name="id" type="text" class="form-control" value="<?= $row['id'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ukuran" class="col-4 col-form-label">Ukuran</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="ukuran" name="ukuran" type="text" class="form-control" value="<?= $row['ukuran'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="warna" class="col-4 col-form-label">Warna</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="warna" name="warna" type="text" class="form-control" value="<?= $row['warna'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="stok" name="stok" type="text" class="form-control" value="<?= $row['stok'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-4 col-form-label">Harga</label>
                        <div class="col-8"> 
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="harga" name="harga" type="text" class="form-control" value="<?= $row['harga'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipe_pakaian_id" class="col-4 col-form-label">Tipe Pakaian id</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="tipe_pakaian_id" name="tipe_pakaian_id" type="text" class="form-control" value="<?= $row['tipe_pakaian_id'] ?>">
                            </div>
                        </div>
                    </div>
                <br>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
                    <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
</div>