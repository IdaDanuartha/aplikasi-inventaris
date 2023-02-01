<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card col-xl-6 col-12 shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pegawai</h6>            
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/pegawai/store" method="post">
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                    <input type="text" placeholder="Input nama pegawai" name="nama_pegawai" class="form-control">
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" placeholder="Input nip pegawai" name="nip" class="form-control">
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" placeholder="Input alamat pegawai" name="alamat" class="form-control">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>