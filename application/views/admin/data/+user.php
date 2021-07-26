    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?php echo $this->session->flashdata('message'); ?>
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form id="form1" action="<?= base_url('admin/home/tambah_us') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"><?= form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="hak">Hak Akses</label>
                                <select class="form-control" id="hak" name="hak" onchange="tampilkan();"><?= form_error('hak', '<small class="text-danger pl-3">', '</small>') ?>
                                    <option selected disabled value="">Pilih...</option>
                                    <option value="1">Administrator</option>
                                    <option value="2">Pakar</option>
                                    <option value="3">Petani / User</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" readonly><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="show">Lihat</label><br>
                                <input type="checkbox" id="show" onclick="myFunction()">
                            </div>
                        </div>
                        <div class="form-row" hidden>
                            <div class="form-group col-md-5">
                                <input type="text" class="form-control" id="foto" name="foto" readonly>
                            </div>
                        </div>
                        <script>
                            function tampilkan() {
                                var role = document.getElementById("form1").hak.value;
                                if (role == "1") {
                                    document.getElementById("password").value = 'admin1234';
                                    document.getElementById("foto").value = 'administrator.png';
                                } else if (role == "2") {
                                    document.getElementById("password").value = 'pakar1234';
                                    document.getElementById("foto").value = 'expert.png';
                                } else if (role == "3") {
                                    document.getElementById("password").value = 'user1234';
                                    document.getElementById("foto").value = 'farmer.png';
                                }
                            }
                        </script>
                        <script type="text/javascript">
                            function myFunction() {
                                var x = document.getElementById("password");
                                if (x.type === "password") {
                                    x.type = "text";
                                } else {
                                    x.type = "password";
                                }
                            }
                        </script>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->