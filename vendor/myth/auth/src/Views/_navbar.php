<?php

$uri = service('uri')->getSegments();
$uri1 = $uri[0] ?? 'index';
$uri2 = $uri[1] ?? '';
$uri3 = $uri[2] ?? '';
// echo $uri1;
?>

<header class="">
    <nav class=" navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?= base_url() ?>events/assets/images/logo.png" width="200" class="logo img-fluid" alt="ITVolunteers">
                <span>
                    ITVolunteers
                    <small>for thchnology voluntery </small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll <?= ($uri1 == 'index') ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll <?= ($uri1 == 'index') ? 'active' : '' ?>" href="<?= base_url() ?>events/index">Event</a>
                    </li>

                    <li>
                        <a class="nav-link   <?= ($uri1 == 'index') ? 'active' : '' ?>" href="<?= base_url() ?>pages/about">About us</a>
                    </li>

                    <li>
                        <a class="nav-link <?= ($uri1 == 'index') ? 'active' : '' ?>" href=" <?= base_url() ?>pages/contact">Contact</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>
</header>