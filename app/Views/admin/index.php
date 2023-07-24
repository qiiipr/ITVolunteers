<?= $this->extend('admin_layout') ?>
<?= $this->section('main') ?>

<?php
$user = render_user_title(user()->username, user()->first_name, user()->last_name);
// echo '<pre>';
// print_r(user());
// echo '</pre>';
?>

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Hello <?= $user ?> 🎉</h5>
                <p class="mb-4">
                  Wlecome again , manage your website now and make it better
                </p>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img src="<?= base_url() ?>/admin/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 order-1 ">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-6 mb-4 ">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="<?= base_url() ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Users</span>
                <h3 class="card-title mb-2"><?= count($users) ?></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="<?= base_url() ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Events</span>
                <h3 class="card-title mb-2"><?= count($events) ?></h3>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
          <div class="col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="<?= base_url() ?>/admin/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                  </div>

                </div>
                <span class="d-block mb-1">Reviews</span>
                <h3 class="card-title text-nowrap mb-2"><?= count($reviews) ?></h3>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>