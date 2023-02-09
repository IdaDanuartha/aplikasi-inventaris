<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card col-xl-6 col-12 shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Ruang</h6>            
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/ruang/update" method="post">
                <input type="hidden" name="id_ruang" value="<?= $data['ruang']['id_ruang'] ?>">
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nama_ruang" class="form-label">Nama Ruang</label>
                    <input type="text" placeholder="Input nama ruang" name="nama_ruang" class="form-control" value="<?= $data['ruang']['nama_ruang'] ?>">
                    <?php if(isset($_SESSION['error']['nama'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['nama'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nip" class="form-label">Kode Ruang</label>
                    <input type="text" placeholder="Input kode ruang" name="kode_ruang" class="form-control" value="<?= $data['ruang']['kode_ruang'] ?>">
                    <?php if(isset($_SESSION['error']['kode_ruang'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['kode_ruang'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="alamat" class="form-label">Keterangan</label>
                    <input type="text" placeholder="Input keterangan" name="keterangan" class="form-control" value="<?= $data['ruang']['keterangan'] ?>">
                    <?php if(isset($_SESSION['error']['keterangan'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['keterangan'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>