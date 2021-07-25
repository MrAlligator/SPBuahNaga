        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-10">
                            <h6 class="m-0 font-weight-bold text-primary">Data Probabilitas</h6>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= base_url('admin/home/tambah_prb') ?>" class="btn btn-success btn-icon-split pull-right">
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
                                    <th width="200px">Hama / Penyakit</th>
                                    <th>Gejala</th>
                                    <th width="100px">Probabilitas</th>
                                    <th width="250px">Perintah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengetahuan as $ilmu) : ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo ++$start;
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $change = $ilmu->id_hamapenyakit;
                                            if ($change == 1) {
                                                echo "Tungau";
                                            } else if ($change == 2) {
                                                echo "Kutu Putih";
                                            } else if ($change == 3) {
                                                echo "Kutu Batok";
                                            } elseif ($change == 4) {
                                                echo "Kutu Sisik";
                                            } elseif ($change == 5) {
                                                echo "Bekicot";
                                            } elseif ($change == 6) {
                                                echo "Semut";
                                            } elseif ($change == 7) {
                                                echo "Burung";
                                            } elseif ($change == 8) {
                                                echo "Busuk Pangkal Batang";
                                            } elseif ($change == 9) {
                                                echo "Busuk Bakteri";
                                            } else if ($change == 10) {
                                                echo "Fusarium";
                                            } else {
                                                echo "Data Tidak Tersedia";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $gejala = $ilmu->id_gejala;
                                            if ($gejala == 1) {
                                                echo "Terjadi pada sulur dan batang";
                                            } else if ($gejala == 2) {
                                                echo "Terjadi pada buah";
                                            } else if ($gejala == 3) {
                                                echo "Terjadi pada buah, sulur dan batang";
                                            } else if ($gejala == 4) {
                                                echo "Kuncup bunga dikerubungi semut";
                                            } else if ($gejala == 5) {
                                                echo "Kulit buah berbintik-bintik cokelat";
                                            } else if ($gejala == 6) {
                                                echo "Cabang atau batang berwarna kuning kusam";
                                            } else if ($gejala == 7) {
                                                echo "Cabang atau batang busuk";
                                            } else if ($gejala == 8) {
                                                echo "Cabang atau batang kering";
                                            } else if ($gejala == 9) {
                                                echo "Pentil buah kerdil atau kecil";
                                            } else if ($gejala == 10) {
                                                echo "Pentil buah rontok";
                                            } else if ($gejala == 11) {
                                                echo "Pada cabang yang tidak terkena sinar matahari berwarna kusam";
                                            } else if ($gejala == 12) {
                                                echo "Terdapat semut pada area yang tidak terkena sinar matahari";
                                            } else if ($gejala == 13) {
                                                echo "Terdapat bekas gigitan dibagian pinggir batang atau sulur";
                                            } else if ($gejala == 14) {
                                                echo "Bekas gigitan bagian ujungnya bergerigi tipis dan halus seperti bekas parutan";
                                            } else if ($gejala == 15) {
                                                echo "Tunas terlihat rusak dan mengering di bekas parutan";
                                            } else if ($gejala == 16) {
                                                echo "Terdapat jejak berupa lendir berwarna keperakan";
                                            } else if ($gejala == 17) {
                                                echo "Batang dan tanaman buah naga berlubang dan habis";
                                            } else if ($gejala == 18) {
                                                echo "Terdapat kotoran berwarna hitam pada sulur atau tiang penyangga atau permukaan tanah";
                                            } else if ($gejala == 19) {
                                                echo "Buah terlihat berlubang";
                                            } else if ($gejala == 20) {
                                                echo "Lubang berbentuk khas bekas patukan paruh";
                                            } else if ($gejala == 21) {
                                                echo "Daging buah terlihat kosong";
                                            } else if ($gejala == 22) {
                                                echo "Buah menjadi busuk";
                                            } else if ($gejala == 23) {
                                                echo "Permukaan kulit buah berselaput di permukaan buah";
                                            } else if ($gejala == 24) {
                                                echo "Terdapat lilin berwarna putih di permukaan buah";
                                            } else if ($gejala == 25) {
                                                echo "Buah agak berkerut";
                                            } else if ($gejala == 26) {
                                                echo "Buah menguning";
                                            } else if ($gejala == 27) {
                                                echo "Buah mengecil";
                                            } else if ($gejala == 28) {
                                                echo "Buah kempes";
                                            } else if ($gejala == 29) {
                                                echo "Buah layu";
                                            } else if ($gejala == 30) {
                                                echo "Buah kering";
                                            } else if ($gejala == 31) {
                                                echo "Kusam pada sulur";
                                            } else if ($gejala == 32) {
                                                echo "Muncul belang-belang berwarna kuning";
                                            } else if ($gejala == 33) {
                                                echo "Terdapat bintik - bintik halus kecoklatan pada batang";
                                            } else if ($gejala == 34) {
                                                echo "Jaringan klorofil pada kulit cabang berubah warna menjadi cokelat";
                                            } else if ($gejala == 35) {
                                                echo "Terdapat bercak - bercak kecil, kering, timbul dan kasar jika diraba";
                                            } else if ($gejala == 36) {
                                                echo "Pusat bercak berwarna coklat tua dilingkari warna cokelat yang lebih muda";
                                            } else if ($gejala == 37) {
                                                echo "Cabang atau batang layu";
                                            } else if ($gejala == 38) {
                                                echo "Terdapat lendir putih kekuningan";
                                            } else if ($gejala == 39) {
                                                echo "Cabang tanaman mengkerut";
                                            } else if ($gejala == 40) {
                                                echo "Cabang tanaman busuk berwarna coklat";
                                            } else if ($gejala == 41) {
                                                echo "Busuk pada pangkal batang berbatas dengan tanah";
                                            } else if ($gejala == 42) {
                                                echo "Cabang atau batang berkerut";
                                            } else if ($gejala == 43) {
                                                echo "Terdapat lendir putih kekuningan";
                                            } else if ($gejala == 44) {
                                                echo "Cabang atau batang tampak basah";
                                            } else if ($gejala == 45) {
                                                echo "Ada bercak berwarna orange yang menyebar tidak beraturan";
                                            } else if ($gejala == 46) {
                                                echo "Busuk basah batang muncul bercak kuning";
                                            } else if ($gejala == 47) {
                                                echo "Bercak membesar sehingga diameternya mencapai 5 - 15mm dan dibatasi dengan warna merah yang jelas";
                                            } else if ($gejala == 48) {
                                                echo "Batang Berair";
                                            } else if ($gejala == 49) {
                                                echo "Busuk kering dibagian tepi batang";
                                            } else if ($gejala == 50) {
                                                echo "Busuk basah atau berlendir bagian ujung batang";
                                            } else if ($gejala == 51) {
                                                echo "Terdapat bulu putih bagian pangkal batang";
                                            } else if ($gejala == 52) {
                                                echo "Batang berwarna kecoklatan";
                                            } else {
                                                echo "Data Tidak Tersedia";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $ilmu->probabilitas ?>
                                        </td>
                                        <td>
                                            <a class="btn text-primary" href="<?php echo site_url('admin/home/editprb/' . $ilmu->id_pengetahuan) ?>"><i class="fas fa-edit"></i> Ubah</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/home/deleteprb/' . $ilmu->id_pengetahuan) ?>')" href="#!" class="btn text-danger"><i class="fas fa-trash"></i> Hapus</a>
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