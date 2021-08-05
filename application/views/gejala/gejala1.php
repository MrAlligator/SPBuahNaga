<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <?php var_dump($o1) ?>
    <br>
    <?php var_dump($o2) ?>
    <br>
    <?php var_dump($o3) ?> -->
    <?php foreach ($pertanyaan as $ask) : ?>
        <div class="card text-center">
            <div class="card-header">
                Pertanyaan
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $ask->pertanyaan; ?></h5>
                <br>
                <form action="" method="" enctype="multipart/form-data">
                    <div class="col-lg-3">
                        <input type="text" class="form-control" id="identitas" name="identitas" value="" hidden>
                    </div>
                    <?php foreach ($o1 as $opsi1) : ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="radio1" name="radio1" value="<?php echo $ask->opsi1 ?>">
                            <label class="form-check-label" for="inlineRadio1"><?= $opsi1->gejala ?></label>
                        </div>
                    <?php endforeach; ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="radio2" name="radio2" value="<?php echo $ask->opsi2 ?>">
                        <label class="form-check-label" for="inlineRadio2"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="radio3" name="radio3" value="<?php echo $ask->opsi3 ?>">
                        <label class="form-check-label" for="inlineRadio3"></label>
                    </div>
                    <hr>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                Pilih salah satu
            </div>
        </div>
        <br>
    <?php endforeach; ?>

</div>
<!-- /.container-fluid -->
<?= $this->pagination->create_links() ?>
</div>
<!-- End of Main Content -->