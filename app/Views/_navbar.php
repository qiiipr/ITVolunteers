<?php

$uri = service('uri')->getSegments();
$uri1 = $uri[0] ?? 'index';
$uri2 = $uri[1] ?? '';
$uri3 = $uri[2] ?? '';
// echo $uri1;
?>
<header>
    <nav class=" navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?= base_url() ?>events/assets/images/logo2.png" style="width: 70px;" class="logo img-fluid pt-2" alt="ITVolunteers">
                <span class="fs-4">
                    ITVolunteers
                    <small>for thchnology voluntery </small>
                </span>
            </a>

            <button class="navbar-toggler pe-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll <?= ($uri1 == 'index') ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll <?= ($uri1 == 'index') ? 'active' : '' ?>" href="<?= base_url() ?>events/index">Events</a>
                    </li>

                    <li>
                        <a class="nav-link   <?= ($uri1 == 'index') ? 'active' : '' ?>" href="<?= base_url() ?>pages/about">About us</a>
                    </li>

                    <li>
                        <a class="nav-link <?= ($uri1 == 'index') ? 'active' : '' ?>" href=" <?= base_url() ?>pages/contact">Contact</a>
                    </li>

                    <?php if (logged_in()) : ?>

                        <li class="nav-item dropdown">
                            <a class="has-children text-black nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Welcome <?= user()->username ?></a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <?php if (in_groups(['admin', 'volunteer'])) : ?>
                                    <li><a class="dropdown-item " href="<?= base_url() ?>admin/index"> Dashboard</a></li>
                                <?php endif; ?>
                                <li><a class="dropdown-item " href="<?= base_url() ?>profile/edit">Profile</a></li>

                            </ul>
                        </li>

                    <?php endif; ?>

                    <?php if (logged_in()) : ?><!-- Show My Profile -->

                        <li class=" text-black nav-item">
                            <a class="nav-link" href="<?= base_url() ?>logout/">Logout</a>
                        </li>
                        <?php if (in_groups(['admin', 'volunteer'])) : ?>
                            <li class="nav-item ms-3">
                                <a class="nav-link custom-btn custom-border-btn btn" href="<?= base_url() ?>events/new/">Add Event</a>
                            </li>
                        <?php endif; ?>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>login/">Login</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="<?= base_url() ?>register/">Register</a>
                        </li>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>