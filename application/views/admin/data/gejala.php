        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Data Gejala Tanaman Buah Naga</h6>
                        </div>
                        <?php if (isset($user['email']) && $user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                            <div class="col-md-2">
                                <a href="<?= base_url('admin/home/tambah_gj') ?>" class="btn btn-success btn-icon-split pull-right">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Data</span>
                                </a>
                            </div>
                        <?php else : ?>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th width="130px">Kode Gejala</th>
                                    <th>Gejala</th>
                                    <th width="250px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($gejala as $phenomenon) : ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo ++$start;
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $phenomenon->kode_gejala ?>
                                        </td>
                                        <td>
                                            <?php echo $phenomenon->gejala ?>
                                        </td>
                                        <td>
                                            <a class="btn text-primary" href="<?php echo site_url('admin/home/editgj/' . $phenomenon->id_gejala) ?>"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/home/deletegj/' . $phenomenon->id_gejala) ?>')" href="#!" class="btn text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
        <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>

        <?= $this->pagination->create_links() ?>

        </div>
        <!-- End of Main Content -->