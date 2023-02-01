<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pegawai</h6>
            <a href="<?= BASE_URL ?>/pegawai/create" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <div class="fas fa-plus"></div>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th>Nama Pegawai</th>
                            <th>NIP</th>
                            <th>Alamat</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['pegawai'] as $key => $pegawai) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $pegawai['nama_pegawai'] ?></td>
                                <td><?= $pegawai['nip'] ?></td>
                                <td><?= $pegawai['alamat'] ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#detailPegawai<?= $pegawai['id_pegawai'] ?>" class="btn btn-info btn-circle btn-sm mr-2">
                                        <i class="fas fa-file-alt"></i>
                                    </button>
                                    <a href="<?= BASE_URL ?>/pegawai/edit/<?= $pegawai['id_pegawai'] ?>" class="btn btn-warning btn-circle btn-sm mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deletePegawai<?= $pegawai['id_pegawai'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Detail pegawai -->
                            <div class="modal fade" id="detailPegawai<?= $pegawai['id_pegawai'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5 class="font-weight-bold">Detail Pegawai</h5>
                                            <form class="m-4">
                                                <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai'] ?>">
                                                <div class="mb-3">
                                                    <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                                    <input readonly type="text" placeholder="Input nama pegawai" name="nama_pegawai" value="<?= $pegawai['nama_pegawai'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nip" class="form-label">NIP</label>
                                                    <input readonly type="text" placeholder="Input nip pegawai" name="nip" value="<?= $pegawai['nip'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input readonly type="text" placeholder="Input alamat pegawai" name="alamat" value="<?= $pegawai['alamat'] ?>" class="form-control">
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="#" data-dismiss="modal" class="btn btn-secondary btn-icon-split">
                                                        <span class="icon text-white-50">
                                                            <div class="fas fa-arrow-left"></div>
                                                        </span>
                                                        <span class="text">Back</span>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hapus pegawai -->
                            <div class="modal fade" id="deletePegawai<?= $pegawai['id_pegawai'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <h5 class="font-weight-bold">Detail Pegawai</h5>
                                            <p class="mx-5 my-3">Apakah anda yakin ingin menghapus pegawai <span class="text-danger font-weight-bold"><?= $pegawai['nama_pegawai'] ?>?</span> Proses ini tidak dapat dibatalkan</span></p>
                                            <div class="d-flex justify-content-center mt-4">
                                                <a href="#" data-dismiss="modal" class="btn btn-secondary btn-icon-split mr-3">
                                                    <span class="icon text-white-50">
                                                        <div class="fas fa-arrow-left"></div>
                                                    </span>
                                                    <span class="text">Back</span>
                                                </a>
                                                <a href="<?= BASE_URL ?>/pegawai/destroy/<?= $pegawai['id_pegawai'] ?>" class="btn btn-danger btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <div class="fas fa-trash"></div>
                                                    </span>
                                                    <span class="text">Hapus</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>