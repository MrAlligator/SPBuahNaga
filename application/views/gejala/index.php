<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pertanyaan Tanaman Buah Naga</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="50px">No</th>
                            <th>Kode Pertanyaan</th>
                            <th>Pertanyaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pertanyaan1 as $bug) :
                        ?>
                            <tr>
                                <td>
                                    <?php
                                    echo $no++;
                                    ?>
                                </td>
                                <td>
                                    <?php echo $bug->id_pertanyaan ?>
                                </td>
                                <td>
                                    <?php echo $bug->pertanyaan ?>
                                </td>
                            </tr>
                            <?php
                            $no = 2;
                            foreach ($pertanyaan2 as $ask) :
                            ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $no++;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($ask->id_pertanyaan != $bug->id_pertanyaan) {
                                            echo $ask->id_pertanyaan;
                                        } else {
                                            echo "<font color='red'>Random Ulang Data Anda</font>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($ask->id_pertanyaan != $bug->id_pertanyaan) {
                                            echo $ask->pertanyaan;
                                        } else {
                                            echo "<font color='red'>Random Ulang Data Anda</font>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <input class="btn btn-success pull-right" type="submit" value="Mulai Konsultasi">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<script>
    function reloadpage() {
        location.reload()
    }
</script>
</div>