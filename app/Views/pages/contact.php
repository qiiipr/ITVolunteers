<?= $this->extend('event_layout') ?>
<?= $this->section('main') ?>

<?php $validation = \config\Services::validation(); ?>

<main>


    <div class="hero overlay" style="background-image: url('<?= base_url() ?>events/assets/images/contact.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Contact Us</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Welcome to the Taif University IT volunteer website! We are excited to hear from you and answer any questions you may have about our program. .</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <h2 class="heading">Get In Touch</h2>
                    <p class="text-black-50">We here for any questions</p>
                </div>
            </div>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success') ?> </div>
            <?php endif ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?> </div>
            <?php endif ?>
            <form action="<?= base_url() ?>/pages/sendEmail" class="row justify-content-between" method="post" enctype="multipart/form-data" novalidate>
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="name" class="ps-3 fw-bold mb-2">Name</label>
                            <input type="text" name="name" class="form-control  <?= ($validation->getError('name')) ? 'is-invalid ' : '' ?>" value="<?= set_value('name') ?>" id="name">
                            <?php if ($validation->getError('name')) :  ?>
                                <span class="invalid-feedback"> <?= $validation->getError('name') ?>
                                <?php endif ?>
                                </span>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="ps-3 fw-bold mb-2 ">Email</label>
                            <input type="email" name="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid ' : '' ?>" value="<?= set_value('email') ?>" id="email">
                            <?php if ($validation->getError('email')) :  ?>
                                <span class="invalid-feedback"> <?= $validation->getError('email') ?>
                                <?php endif ?>
                                </span>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="message" class="ps-3 fw-bold mb-2">massage</label>
                            <textarea id="subject" name="massage" class="form-control  <?= ($validation->getError('massage')) ? 'is-invalid ' : '' ?>" cols="30" value="<?= set_value('massage') ?> rows=" 10"></textarea>
                            <?php if ($validation->getError('massage')) :  ?>
                                <span class="invalid-feedback"> <?= $validation->getError('massage') ?>
                                <?php endif ?>
                                </span>
                        </div>
                        <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary text-white py-3" value="Send Message">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-6 col-lg-6 mb-4">
                            <h3 class="h6 fw-bold text-secondary">Address</h3>
                            <p>Taif Univarsity, information Technology colloge</p>
                        </div>
                        <div class="col-6 col-lg-6 mb-4">
                            <h3 class="h6 fw-bold text-secondary">Phone</h3>
                            <p>
                                055 330 6890 <br>
                                056 051 6056
                            </p>
                        </div>

                        <div class="col-6 col-lg-6 mb-4">
                            <h3 class="h6 fw-bold text-secondary">Follow</h3>
                            <ul class="list-unstyled social-custom">
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-6 mb-4">
                            <h3 class="h6 fw-bold text-secondary">Email</h3>
                            <p>
                                <a href="#">ITVolunteers5@gmail.com</a>
                            </p>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <div class="section sec-instagram pb-0">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-3" data-aos="fade-up">
                    <span class="subheading mb-3">Instagram</span>
                    <h2 class="heading">We Are In Instagram</h2>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <p class="fs-4">
                        We document all the happy moments on Instagram, join us to see more</p>
                </div>
            </div>
        </div>

    </div>
</main>
<?= $this->endSection() ?>