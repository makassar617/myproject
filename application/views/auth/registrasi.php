<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name"
                                    placeholder="Nama" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email"
                                    placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1"
                                        name="password1" placeholder="Kata Sandi">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2"
                                        name="password2" placeholder="Ulangi Kata Sandi">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <Button type="submit" class="btn btn-primary btn-user btn-block">
                                Registrasi Akun
                            </Button>
                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Registrasi dengan Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Registrasi dengan Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth'); ?> ">Sudah Punya Akun? Masuk!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>