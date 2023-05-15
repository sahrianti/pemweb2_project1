<?php
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM tipe_pakaian WHERE id=?";
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
                <form method="POST" action="proses_tipe_pakaian.php">
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
                        <label for="tipe" class="col-4 col-form-label">Tipe</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="tipe" name="tipe" type="text" class="form-control" value="<?= $row['tipe'] ?>">
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