<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="radio1" name="radio" value="Terjadi pada buah">
                        <label class="form-check-label" for="inlineRadio1">Terjadi pada Buah</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="radio2" name="radio" value="Terjadi pada sulur dan batang">
                        <label class="form-check-label" for="inlineRadio2">Terjadi pada Sulur dan / atau Batang </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="radio3" name="radio" value="Terjadi pada buah, sulur dan batang">
                        <label class="form-check-label" for="inlineRadio3">Terjadi pada keduanya</label>
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