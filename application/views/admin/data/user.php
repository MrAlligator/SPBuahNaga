        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                        </div>
                        <?php if (isset($user['email']) && $user['role_id'] == 1) : ?>
                            <div class="col-md-2">
                                <a href="<?= base_url('admin/home/tambah_us') ?>" class="btn btn-success btn-icon-split pull-right">
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th width="100px">Foto User</th>
                                    <th width="100px">Hak Akses</th>
                                    <th width="100px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengguna as $user) : ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo ++$start;
                                            ?>
                                        </td>
                                        <td>
                                            <?= $user->name ?>
                                        </td>
                                        <td>
                                            <?= $user->email ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('assets/img/userimage/') . $user->foto_user ?>" alt="" width="100px">
                                        </td>
                                        <td>
                                            <?php
                                            if ($user->role_id == 1) {
                                                echo "Administrator";
                                            } else if ($user->role_id == 2) {
                                                echo "Pakar";
                                            } else if ($user->role_id == 3) {
                                                echo "Petani / User";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/home/deleteus/' . $user->id_user) ?>')" href="#!" class="btn text-danger"><i class="fas fa-trash"></i> Hapus</a>
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