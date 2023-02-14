<div class="container-fluid">
    <div>
        <?php Flasher::flash() ?>
    </div>
    <div class="card col-xl-6 col-12 shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Petugas</h6>            
        </div>
        <div class="card-body">
            <form action="<?= BASE_URL ?>/petugas/store" method="post">
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" placeholder="Input username petugas" name="username" class="form-control" value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
                    <?php if(isset($_SESSION['error']['username'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['username'] ?></p>
                    <?php endif; ?>
                </div>
                <div class="mb-3" style="margin-left: -10px;">
                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                    <input type="text" placeholder="Input nama petugas" name="nama_petugas" class="form-control" value="<?= isset($_POST['nama_petugas']) ? $_POST['nama_petugas'] : '' ?>">
                    <?php if(isset($_SESSION['error']['nama'])) : ?>
                        <p class="text-danger"><?= $_SESSION['error']['nama'] ?></p>
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
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>