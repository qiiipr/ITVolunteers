<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="section1 h-100 ">
    <div class="container py-5 h-110">
        <div class="row d-flex justify-content-center align-items-center h-110">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="card">
                            <h2 class="card-header"><?= lang('Auth.forgotPassword') ?></h2>
                            <div class="card-body">

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                                <form action="<?= url_to('forgot') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.emailAddress') ?></label>
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>

                                    <br>

                                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>