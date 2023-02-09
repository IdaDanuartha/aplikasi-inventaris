<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card col-xl-6 col-12 shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis</h6>            
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/jenis/store" method="post">
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nama_jenis" class="form-label">Nama Jenis</label>
                    <input type="text" placeholder="Input nama jenis" name="nama_jenis" class="form-control" value="<?= isset($_POST['nama_jenis']) ? $_POST['nama_jenis'] : '' ?>">
                    <?php if(isset($_SESSION['error']['nama'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['nama'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nip" class="form-label">Kode Jenis</label>
                    <input type="text" placeholder="Input kode jenis" name="kode_jenis" class="form-control" value="<?= isset($_POST['kode_jenis']) ? $_POST['kode_jenis'] : '' ?>">
                    <?php if(isset($_SESSION['error']['kode_jenis'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['kode_jenis'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="alamat" class="form-label">Keterangan</label>
                    <input type="text" placeholder="Input keterangan" name="keterangan" class="form-control" value="<?= isset($_POST['keterangan']) ? $_POST['keterangan'] : '' ?>">
                    <?php if(isset($_SESSION['error']['keterangan'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['keterangan'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>