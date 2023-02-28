<h3>Halaman Data Penduduk</h3>
<div class="col-md-12">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Data Penduduk</h6>
        </div>
        <?php echo validation_errors(); ?>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <div class="container">
                    <?php if ($this->session->flashdata('pesan')) {
                        echo '<div class="alert alert-success" role="alert">
                    Success ! ';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    } ?>
                    <?php if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger" role="alert">
                    Errort ! ';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    } ?>
                    <div class="text-align-right">
                        <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modaladduser">Tambah Data</button>
                    </div>
                    <table id="penduduk" class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>NIK</td>
                                <td>Nama</td>
                                <td>Jenis Kelamin</td>
                                <td>Dosis 1</td>
                                <td>Dosis 2</td>
                                <td>Dosis 3</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($penduduk as $a) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $a->nik; ?></td>
                                    <td><?= $a->nama; ?></td>
                                    <td>
                                        <?php if ($a->jk == 1) {
                                            echo 'Laki - Laki';
                                        } else {
                                            echo 'Perempuan';
                                        } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->sd1 == 1) { ?>
                                            <i class="ni ni-check-bold"></i>
                                        <?php } else if ($a->sd1 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->sd2 == 1) { ?>
                                            <i class="ni ni-check-bold"></i>
                                        <?php } else if ($a->sd2 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($a->sd3 == 1) { ?>
                                            <i class="ni ni-check-bold"></i>
                                        <?php } else if ($a->sd3 == 0) { ?>
                                            ❌
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add -->
<div class="col-md-4">
    <div class="modal fade" id="modaladduser" tabindex="-1" role="dialog" aria-labelledby="modaladduser" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Tambah Data Penduduk</h6>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('data_penduduk') ?>/add" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Kependudukan</label>
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Kependudukan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tmpt">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmpt" id="tmpt" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl" id="tgl">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="jk">Pilih Jenis Kelamin</label>
                                    <select class="form-control" id="jk" name="jk">
                                        <option value="">Select Gender</option>
                                        <option value="1">Laki - Laki</option>
                                        <option value="0">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama">Pilih Agama</label>
                                        <select class="form-control" id="agama" name="agama">
                                            <option value="">Select Agama</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen</option>
                                            <option value="3">Hindu</option>
                                            <option value="4">Budha</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p>Status Vaksin</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dosis Pertama</label>
                                        <select class="form-control" id="st1" name="st1">
                                            <option value="">Select Status</option>
                                            <option value="1">Sudah</option>
                                            <option value="0">Belum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dosis Kedua</label>
                                        <select class="form-control" id="st2" name="st2">
                                            <option value="">Select Status</option>
                                            <option value="1">Sudah</option>
                                            <option value="0">Belum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Dosis Ketiga</label>
                                        <select class="form-control" id="st3" name="st3">
                                            <option value="">Select Status</option>
                                            <option value="1">Sudah</option>
                                            <option value="0">Belum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Lokasi</label><br>
                                    <button type="button" id="manualtikor" class="btn btn-sm bg-gradient-primary">Manual</button>
                                    <button type="button" id="autotikor" class="btn btn-sm bg-gradient-primary">Otomatis</button>
                                    <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Ex : 25.2126, 1 11.3327">
                                </div>
                            </div>
                            <div class="text-align-right mt-3">
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<script>
    $(document).ready(function() {
        $('#penduduk').DataTable();
        $('#lokasi').hide();

    });

    $('#autotikor').click(function() {
        $('#lokasi').show();
        $('#lokasi').val('25.2126, 1 11.33');

    });

    $('#manualtikor').click(function() {
        $('#lokasi').show();
        $('#lokasi').val('');

    });
</script>