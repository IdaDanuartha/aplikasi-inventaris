<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Jenis</h6>
            <a href="<?= BASE_URL ?>/jenis/create" class="btn btn-success btn-icon-split">
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
                            <th>Nama Jenis</th>
                            <th>Kode Jenis</th>
                            <th>Keterangan</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['jenis'] as $key => $jenis) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $jenis['nama_jenis'] ?></td>
                                <td><?= $jenis['kode_jenis'] ?></td>
                                <td><?= $jenis['keterangan'] ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#detailJenis<?= $jenis['id_jenis'] ?>" class="btn btn-info btn-circle btn-sm mr-2">
                                        <i class="fas fa-file-alt"></i>
                                    </button>
                                    <a href="<?= BASE_URL ?>/jenis/edit/<?= $jenis['id_jenis'] ?>" class="btn btn-warning btn-circle btn-sm mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteJenis<?= $jenis['id_jenis'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Detail jenis -->
                            <div class="modal fade" id="detailJenis<?= $jenis['id_jenis'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5 class="font-weight-bold">Detail jenis</h5>
                                            <form class="m-4">
                                                <input type="hidden" name="id_jenis" value="<?= $jenis['id_jenis'] ?>">
                                                <div class="mb-3">
                                                    <label for="nama_jenis" class="form-label">Nama jenis</label>
                                                    <input readonly type="text" placeholder="Input nama jenis" name="nama_jenis" value="<?= $jenis['nama_jenis'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="nip" class="form-label">Kode jenis</label>
                                                    <input readonly type="text" placeholder="Input kode jenis" name="kode_jenis" value="<?= $jenis['kode_jenis'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="alamat" class="form-label">Keterangan</label>
                                                    <input readonly type="text" placeholder="Input keterangan jenis" name="keterangan" value="<?= $jenis['keterangan'] ?>" class="form-control">
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

                            <!-- Hapus jenis -->
                            <div class="modal fade" id="deleteJenis<?= $jenis['id_jenis'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <h5 class="font-weight-bold">Hapus jenis</h5>
                                            <p class="mx-5 my-3">Apakah anda yakin ingin menghapus jenis <span class="text-danger font-weight-bold"><?= $jenis['nama_jenis'] ?>?</span> Proses ini tidak dapat dibatalkan</span></p>
                                            <div class="d-flex justify-content-center mt-4">
                                                <a href="#" data-dismiss="modal" class="btn btn-secondary btn-icon-split mr-3">
                                                    <span class="icon text-white-50">
                                                        <div class="fas fa-arrow-left"></div>
                                                    </span>
                                                    <span class="text">Back</span>
                                                </a>
                                                <a href="<?= BASE_URL ?>/jenis/destroy/<?= $jenis['id_jenis'] ?>" class="btn btn-danger btn-icon-split">
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