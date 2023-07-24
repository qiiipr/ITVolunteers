<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/events/assets/images/logo.png" />


    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Bootstrap core CSS -->

    <style>
        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #59886bba;


            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, #59886bba);

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, #59886bba);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link href="<?= base_url() ?>events/assets/fonts/icomoon/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/fonts/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/tiny-slider.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/flatpickr.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <?= $this->renderSection('pageStyles') ?>


</head>

<body>
    <div class="site-header">
        <?= view('Myth\Auth\Views\_navbar') ?>
        <div>

            <?= $this->renderSection('main') ?>
        </div>
        <?= view('Myth\Auth\Views\_footer') ?>

    </div>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url() ?>/events/assets/js/flatpickr.min.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/tiny-slider.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/aos.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/navbar.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/counter.js"></script>
    <script src="<?= base_url() ?>/events/assets/js/custom.js"></script>
</body>

</html>