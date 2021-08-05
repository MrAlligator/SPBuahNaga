        <!-- Begin Page Content -->
        <div class="container-fluid">

            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <?php if (isset($user['email']) && $user['role_id'] == 1 || $user['role_id'] == 2) : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data Hama dan Penyakit Tanaman Buah Naga</h6>
                            </div>
                            <div class="col-md-2">
                                <a href="<?= base_url('admin/home/tambah_hp') ?>" class="btn btn-success btn-icon-split pull-right">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Data</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="200px">Kode Hama Penyakit</th>
                                        <th>Hama dan Penyakit</th>
                                        <th width="250px">Perintah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($hama as $bug) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo $no++;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $bug->kode_hamapenyakit ?>
                                            </td>
                                            <td>
                                                <?php echo $bug->hamapenyakit ?>
                                            </td>
                                            <td>
                                                <a class="btn text-primary" href="<?php echo site_url('admin/home/edithp/' . $bug->id_hamapenyakit) ?>"><i class="fas fa-edit"></i> Ubah</a>
                                                <a onclick="deleteConfirm('<?php echo site_url('admin/home/deletehp/' . $bug->id_hamapenyakit) ?>')" href="#!" class="btn text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-primary">Data Hama dan Penyakit Tanaman Buah Naga</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th width="200px">Kode Hama Penyakit</th>
                                        <th>Hama dan Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($hama as $bug) :
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                echo $no++;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $bug->kode_hamapenyakit ?>
                                            </td>
                                            <td>
                                                <?php echo $bug->hamapenyakit ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
        <!-- /.container-fluid -->
        <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>
        </div>
        <!-- End of Main Content -->