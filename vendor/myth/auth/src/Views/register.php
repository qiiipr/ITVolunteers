<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<body>
    <main>

        <section class="section1 h-100  gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-104">
                <div class="row d-flex justify-content-center align-items-center h-104">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="<?= base_url() ?>events/assets/images/singin.png" style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-4 pb-4">Register Now</h4>
                                        </div>

                                        <form class="" action="<?= url_to('register') ?>" method="post" role="form">
                                            <?= csrf_field() ?>

                                            <div class="col-lg-12 col-12">
                                                <?= view('Myth\Auth\Views\_message_block') ?>
                                            </div>

                                            <div class="col-lg-12 col-12">
                                                <h4 class="mt-1">Account Info</h4>
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control px-4" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="text" name="username" id="username" class="form-control" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="password" name="pass_confirm" id="pass_confirm" class="form-control" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                            </div>

                                            <div class="col-lg-12 col-12 ">
                                                <h4 class="mt-1">Personal Info (option)</h4>
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name">
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name">
                                            </div>

                                            <div class="form-outline  mb-2">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="phone">
                                            </div>

                                            <div class="text-center pt-1 form-outline mt-3 mb-3">
                                                <button type="submit" class=" form-control   gradient-custom-2 mb-6" style="background-color: #59886bba;">
                                                    <p class="fs-4"> Register </p>
                                                </button>
                                            </div>


                                            <hr>
                                            <p><a class="text-black fs-5" href=" <?= url_to('login') ?>"><?= lang('Auth.alreadyRegistered') ?></a></p>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">We are more than just a Volunteer</h4>
                                        <p class="small mb-0">As an IT volunteer, you will have the opportunity to work with a team of experienced professionals and to learn about the latest IT technologies. You will also have the opportunity to make a positive impact on the university community...</p>
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