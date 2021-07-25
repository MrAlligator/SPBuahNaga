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
                            <th>No</th>
                            <th>Kode Pertanyaan</th>
                            <th>Pertanyaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pertanyaan as $bug) :
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
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->pagination->create_links() ?>
</div>
<!-- End of Main Content -->
</div>