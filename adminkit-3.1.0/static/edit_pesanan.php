<?php
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM pesanan WHERE id=?";
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
                <form method="POST" action="proses_pesanan.php">
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
                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $row['tanggal'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pakaian_id" class="col-4 col-form-label">Pakaian id</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="pakaian_id" name="pakaian_id" type="text" class="form-control" value="<?= $row['pakaian_id'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-4 col-form-label">quantity</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="quantity" name="quantity" type="text" class="form-control" value="<?= $row['quantity'] ?>">
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