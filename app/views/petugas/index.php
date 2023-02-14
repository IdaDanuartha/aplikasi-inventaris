<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Petugas</h6>
            <a href="<?= BASE_URL ?>/petugas/create" class="btn btn-success btn-icon-split">
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
                            <th>Nama Petugas</th>
                            <th>Username</th>                            
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['petugas'] as $key => $petugas) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $petugas['nama_petugas'] ?></td>
                                <td><?= $petugas['username'] ?></td>
                                <td>
                                    <button data-toggle="modal" data-target="#detailPetugas<?= $petugas['id_petugas'] ?>" class="btn btn-info btn-circle btn-sm mr-2">
                                        <i class="fas fa-file-alt"></i>
                                    </button>
                                    <a href="<?= BASE_URL ?>/petugas/edit/<?= $petugas['id_petugas'] ?>" class="btn btn-warning btn-circle btn-sm mr-2">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deletePetugas<?= $petugas['id_petugas'] ?>">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Detail petugas -->
                            <div class="modal fade" id="detailPetugas<?= $petugas['id_petugas'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h5 class="font-weight-bold">Detail Petugas</h5>
                                            <form class="m-4">
                                                <input type="hidden" name="id_petugas" value="<?= $petugas['id_petugas'] ?>">
                                                <div class="mb-3">
                                                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                                    <input readonly type="text" placeholder="Input nama petugas" name="nama_petugas" value="<?= $petugas['nama_petugas'] ?>" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input readonly type="text" placeholder="Input username petugas" name="username" value="<?= $petugas['username'] ?>" class="form-control">
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

                            <!-- Hapus petugas -->
                            <div class="modal fade" id="deletePetugas<?= $petugas['id_petugas'] ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <h5 class="font-weight-bold">Hapus Petugas</h5>
                                            <p class="mx-5 my-3">Apakah anda yakin ingin menghapus petugas <span class="text-danger font-weight-bold"><?= $petugas['nama_petugas'] ?>?</span> Proses ini tidak dapat dibatalkan</span></p>
                                            <div class="d-flex justify-content-center mt-4">
                                                <a href="#" data-dismiss="modal" class="btn btn-secondary btn-icon-split mr-3">
                                                    <span class="icon text-white-50">
                                                        <div class="fas fa-arrow-left"></div>
                                                    </span>
                                                    <span class="text">Back</span>
                                                </a>
                                                <a href="<?= BASE_URL ?>/petugas/destroy/<?= $petugas['id_petugas'] ?>" class="btn btn-danger btn-icon-split">
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