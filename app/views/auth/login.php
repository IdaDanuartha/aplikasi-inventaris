<div class="container">

    <!-- Outer Row -->
    <div class="justify-content-center">

        <div class="col-12">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="p-5 row g-5">
                        <img class="col-lg-6 col-12 d-lg-flex d-none img-profile rounded-circle" src="<?= BASE_URL ?>/assets/img/undraw_profile_2.svg">
                        <div class="col-lg-6 col-12">
                            <div class="text-center">
                                <h6>Halo User!</h5>
                                <h2 class="text-gray-900 mb-4">Selamat Datang di Web Pembayaran Spp SMKN 1 Denpasar!</h2>
                            </div>
                            <div>
                                <?php Flasher::flash() ?>
                            </div>
                            <form class="user" action="<?= BASE_URL ?>/auth/signin" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                            <!-- <hr>
                            <div class="d-flex justify-content-between">
                                <a class="small" href="#">Forgot Password?</a>
                                <a class="small" href="<?= BASE_URL ?>/auth/register">Create an Account!</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

</div>