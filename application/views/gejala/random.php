<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <form action="">
        <?php
        $no = 1;
        foreach ($random as $rand) { ?>
            <div class="card shadow mb-4">
                <div class="card text-center">
                    <div class="card-header">
                        Pertanyaan <?= $no++ ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $rand->pertanyaan ?></h5>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="radio1" name="radio" value="Terjadi pada buah">
                                    <label class="form-check-label" for="inlineRadio1">Terjadi pada Buah</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="radio2" name="radio" value="Terjadi pada sulur dan batang">
                                    <label class="form-check-label" for="inlineRadio2">Terjadi pada Sulur dan / atau Batang </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="radio3" name="radio" value="Terjadi pada buah, sulur dan batang">
                                    <label class="form-check-label" for="inlineRadio3">Terjadi pada keduanya</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        <?php } ?>
    </form>
</div>
</div>