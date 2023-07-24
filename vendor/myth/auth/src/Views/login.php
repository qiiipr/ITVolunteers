<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<body>
    <main>

        <section class="section1 h-100  gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-200">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="<?= base_url() ?>events/assets/images/login.png" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-3 pb-1">We are The IT Volunteer</h4>
                                        </div>

                                        <form action="<?= url_to('login') ?>" method="post" role="form">
                                            <?= csrf_field() ?>

                                            <div class="col-lg-12 col-12">
                                                <?= view('Myth\Auth\Views\_message_block') ?>
                                            </div>
                                            <p>Please login to your account</p>


                                            <?php if ($config->validFields === ['email']) : ?>
                                                <div class="form-outline  mb-4">
                                                    <input type="email" name="login" id="login" pattern="[^ @]*@[^ @]*" class="form-control px-4" placeholder="<?= lang('Auth.email') ?>" value="<?= old('login') ?>">

                                                </div>

                                            <?php else : ?>
                                                <div class="form-outline  mb-4">
                                                    <input type="text" name="login" id="login" class="form-control px-4" placeholder="<?= lang('Auth.emailOrUsername') ?>" value="<?= old('login') ?>">
                                                </div>
                                            <?php endif; ?>


                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="password" class="form-control px-4" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                            </div>


                                            <div class="text-center pt-1 form-outline  mb-7 pb-4">
                                                <button type="submit" class=" form-control   gradient-custom-2 mb-6" style="background-color: #59886bba;">
                                                    <p class="fs-4"> Login </p>
                                                </button>
                                            </div>


                                            <?php if ($config->allowRegistration) : ?>
                                                <p><a class="text-black fs-5 " href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                            <?php endif; ?>
                                            <?php if ($config->activeResetter) : ?>
                                                <p><a class="text-black fs-5 " href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                            <?php endif; ?>

                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are more than Volunteer</h4>
                                        <p class="small mb-0">As an IT volunteer, you will have the opportunity to work with a team of experienced professionals and to learn about the latest IT technologies. You will also have the opportunity to make a positive impact on the university community..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
</body>
<?= $this->endSection() ?>