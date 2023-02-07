<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card col-xl-6 col-12 shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Pegawai</h6>            
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/pegawai/update/<?= $data['pegawai']['id_pegawai'] ?>" method="post">
                <input type="hidden" name="id_pegawai" value="<?= $data['pegawai']['id_pegawai'] ?>">
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                    <input type="text" placeholder="Input nama pegawai" name="nama_pegawai" value="<?= $data['pegawai']['nama_pegawai'] ?>" class="form-control">
                    <?php if(isset($_SESSION['error']['nama'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['nama'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" placeholder="Input nip pegawai" name="nip" value="<?= $data['pegawai']['nip'] ?>" class="form-control">
                    <?php if(isset($_SESSION['error']['nip'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['nip'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" placeholder="Input alamat" name="alamat" value="<?= $data['pegawai']['alamat'] ?>" class="form-control">
                    <?php if(isset($_SESSION['error']['alamat'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['alamat'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" placeholder="Input password" name="password" class="form-control">
                    <?php if(isset($_SESSION['error']['password'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['password'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>