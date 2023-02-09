<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Ruangan</h6>
            <a href="<?= BASE_URL ?>/ruang/create" class="btn btn-success btn-icon-split">
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
                            <th>Nama Ruang</th>
                            <th>Kode Ruang</th>
                            <th>Keterangan</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['ruang'] as $key => $ruang) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $ruang['nama_ruang'] ?></td>
                                <td><?= $ruang['kode_ruang'] ?></td>
                                <td><?= $ruang['keterangan'] ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#detailRuang<?= $ruang['id_ruang'] ?>" class="btn btn-info btn-circle btn-sm mr-2">
                                        <i class="fas fa-file-alt"></i>
                                    </button>
                                    <a href="<?= BASE_URL ?>/ruang/edit/<?= $ruang['id_ruang'] ?>" class="btn btn-warning btn-circle btn-sm mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteRuang<?= $ruang['id_ruang'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Detail ruang -->
                            <div class="modal fade" id="detailRuang<?= $ruang['id_ruang'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5 class="font-weight-bold">Detail Ruang</h5>
                                            <form class="m-4">
                                                <input type="hidden" name="id_ruang" value="<?= $ruang['id_ruang'] ?>">
                                                <div class="mb-3">
                                                    <label for="nama_ruang" class="form-label">Nama Ruang</label>
                                                    <input readonly type="text" placeholder="Input nama ruang" name="nama_ruang" value="<?= $ruang['nama_ruang'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nip" class="form-label">Kode Ruang</label>
                                                    <input readonly type="text" placeholder="Input kode ruang" name="kode_ruang" value="<?= $ruang['kode_ruang'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Keterangan</label>
                                                    <input readonly type="text" placeholder="Input keterangan ruang" name="keterangan" value="<?= $ruang['keterangan'] ?>" class="form-control">
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

                            <!-- Hapus ruang -->
                            <div class="modal fade" id="deleteRuang<?= $ruang['id_ruang'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <h5 class="font-weight-bold">Hapus Ruang</h5>
                                            <p class="mx-5 my-3">Apakah anda yakin ingin menghapus ruang <span class="text-danger font-weight-bold"><?= $ruang['nama_ruang'] ?>?</span> Proses ini tidak dapat dibatalkan</span></p>
                                            <div class="d-flex justify-content-center mt-4">
                                                <a href="#" data-dismiss="modal" class="btn btn-secondary btn-icon-split mr-3">
                                                    <span class="icon text-white-50">
                                                        <div class="fas fa-arrow-left"></div>
                                                    </span>
                                                    <span class="text">Back</span>
                                                </a>
                                                <a href="<?= BASE_URL ?>/ruang/destroy/<?= $ruang['id_ruang'] ?>" class="btn btn-danger btn-icon-split">
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