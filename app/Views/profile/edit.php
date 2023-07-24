<?= $this->extend('event_layout') ?>
<?= $this->section('main') ?>

<?php
$user = render_user_title(user()->username, user()->first_name, user()->last_name);
$avatar_path = render_user_avatar(user()->avatar);
?>

<main>
    <section class="volunteer-section section-padding " id="section_4">
        <div class=" container">
            <h1 class="mb-5">Account Settings</h1>
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">
                    <div class="p-4">
                        <div class="img-circle text-center mb-3">
                            <?php if (!empty(user()->avatar)) : ?>
                                <img src="<?= base_url() ?>/profile/image/<?= user()->avatar ?>" alt="User Avatar">
                            <?php else : ?>
                                <img src="<?= base_url('assets/images/avatar/default-avatar.png') ?>" alt="Default Avatar">
                            <?php endif; ?>

                        </div>

                        <h4 class="text-center"> Welecom <?= user()->username ?></h4>
                    </div>
                    <div class="nav flex-column nav-pills" style="background-color: #198754b5;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link " id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                            <i class="fa fa-home text-center mr-1"></i>
                            Account
                        </a>
                        <?php if (in_groups('volunteer')) : ?>
                            <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
                                <i class="fa fa-user text-center mr-1"></i>
                                Volunteer hours
                            </a>
                        <?php endif ?>

                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">Edit User Info.</h3>
                        <div class="container">
                            <div class="row">
                                <div class="form-group">

                                    <form action="<?= base_url() ?>profile/update" method="post" class="custom-form volunteer-form mb-5 mb-lg-0" role="form" enctype="multipart/form-data">

                                        <?= form_hidden('id', user()->id) ?>

                                        <div class="col-lg-12 col-12">
                                            <?= view('Views\_message_block') ?>
                                        </div>

                                        <div class="col-lg-12 col-12 mt-2">
                                            <input type="text" style="background-color: #fff;" name="first_name" id="first_name" class="form-control" placeholder="Enter New First Name" value="<?= (old('first_name')) ? old('first_name') : user()->first_name ?>">
                                        </div>

                                        <div class="col-lg-12 col-12 mt-2">
                                            <input type="text" style="background-color: #fff;" name="last_name" id="last_name" class="form-control" placeholder="Enter New Last Name" value="<?= (old('last_name')) ? old('last_name') : user()->last_name ?>">
                                        </div>

                                        <div class="col-lg-12 col-12 mt-2">
                                            <input type="text" style="background-color: #fff;" name="username" id="username" class="form-control" placeholder="username" value="<?= (old('username')) ? old('username') : user()->username ?>">
                                        </div>

                                        <div class="col-lg-12 col-12 mt-2">
                                            <input type="email" style="background-color: #fff;" name="email" id="email" class="form-control" placeholder="Enter New Email@gmail.com" value="<?= (old('email')) ? old('email') : user()->email ?>">
                                        </div>
                                        <div class=" col-lg-12 col-12 mt-2">
                                            <input type="text" style="background-color: #fff;" name="phone" id="phone" class="form-control" placeholder="Enter New Phone Number" value="<?= (old('phone')) ? old('phone') : user()->phone ?>">
                                        </div>
                                        <div class="col-lg-12 col-12 mt-2">
                                            <input type="file" style="background-color: #fff;" name="avatar" class="form-control" placeholder="Upload avatar.." id="avatar" value="<?= old('avatar') ?>">
                                        </div>
                                        <button type="submit" class="form-control mt-4">send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <h3 class="mb-4">Volunteer hours</h3>
                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <h2>Your Total Volunteer Hours: <?php echo $totalVolunteerHours; ?></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</main>

<?= $this->endSection() ?>