<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/events/assets/images/logo.png" />

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet">



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
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>assets/js/counter.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <?= $this->renderSection('pageScripts') ?>
</body>

</html>