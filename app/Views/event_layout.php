<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/events/assets/images/logo.png" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Bootstrap core CSS -->


    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/fonts/icomoon/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/fonts/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/tiny-slider.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/flatpickr.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>events/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?= $this->renderSection('pageStyles') ?>


</head>

<body>

    <div class="site-header">
        <?= view('Views\_navbar') ?>
        <div>
            <?= $this->renderSection('main') ?>
        </div>
        <?= view('Views\_footer') ?>

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





    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.sticky.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>