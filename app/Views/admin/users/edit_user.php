<?= $this->extend('admin_layout') ?>
<?= $this->section('main') ?>
<?php
$avatar_path = render_user_avatar($user->avatar);
$userGroup = render_user_groups($user_groups);
$userActive = render_user_active($user->active);
?>
<main>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                        </li>


                    </ul>
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>


                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-5 p-4">
                                <img src="<?= $avatar_path ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <p class="mb-2 fs-5"> Group : <?= $userGroup ?></p>
                                    <p class="mb-2 fs-5"> Active : <?= $userActive ?></p>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <form action="<?= base_url() ?>admin/update_user" method="post" class="custom-form volunteer-form mb-5 mb-lg-0" role="form" enctype="multipart/form-data">
                                    <?= form_hidden('id', $user->id) ?>

                                    <div class="col-lg-12 col-12">
                                        <?= view('Views\_message_block') ?>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter New First Name" value="<?= (old('first_name')) ? old('first_name') : $user->first_name ?>">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter New Last Name" value="<?= (old('last_name')) ? old('last_name') : $user->last_name ?>">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="username" class="form-label">username</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="username" value="<?= (old('username')) ? old('username') : $user->username ?>">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter New Email@gmail.com" value="<?= (old('email')) ? old('email') : $user->email ?>">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter New Phone Number" value="<?= (old('phone')) ? old('phone') : $user->phone ?>">
                                    </div>


                                    <button type="submit" class="btn btn-primary deactivate-account">submit</button>

                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-4">
                                <h5 class="card-header"><i class="menu-icon tf-icons bx bx-low-vision"></i> Deactivate or reactivate the account</h5>
                                <div class="card-body">
                                    <div class="mb-3 col-12 mb-0">
                                        <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold mb-1">Are you sure</h6>
                                            <p class="mb-0">unactive will blocke user to use website </p>
                                        </div>
                                    </div>
                                    <?= form_open("admin/deactivate", "id='formAccountDeactivation'") ?>
                                    <?= csrf_field() ?>
                                    <?= form_hidden('id', $user->id) ?>

                                    <label for="active" class="form-label">stute user</label>
                                    <select class="mb-3 form-select" name="active" id="active">
                                        <option value="1">Active</option>
                                        <option value="0">Inactiv </option>
                                    </select>

                                    <button type="submit" class="btn btn-primary deactivate-account">submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-4">
                                <h5 class="card-header"><i class="menu-icon tf-icons bx bx-low-vision"></i>Give permission to manage the site</h5>
                                <div class="card-body">
                                    <div class="mb-3 col-12 mb-0">
                                        <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold mb-1">Make sure to give permission</h6>
                                            <p class="mb-0">usre will have full authority to control the site</p>
                                        </div>
                                    </div>
                                    <?= form_open("admin/set_admin", "id='formAccountDeactivation'") ?>
                                    <?= csrf_field() ?>
                                    <?= form_hidden('id', $user->id) ?>

                                    <label for="is_admin" class="form-label">user permission</label>
                                    <select class="mb-3 form-select" name="is_admin" id="is_admin">
                                        <option value="1">Add to the administration group</option>
                                        <option value="0">Remove to the administration group </option>
                                    </select>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-4">
                                <h5 class="card-header"><i class="menu-icon tf-icons bx bx-low-vision"></i>Give permission to be volunteer</h5>
                                <div class="card-body">
                                    <div class="mb-3 col-12 mb-0">
                                        <div class="alert alert-warning">
                                            <h6 class="alert-heading fw-bold mb-1">Make sure to give permission</h6>
                                            <p class="mb-0">usre will have full authority to manage event</p>
                                        </div>
                                    </div>
                                    <?= form_open("admin/set_volunteer", "id='formAccountDeactivation'") ?>
                                    <?= csrf_field() ?>
                                    <?= form_hidden('id', $user->id) ?>

                                    <label for="is_volunteer" class="form-label">user permission</label>
                                    <select class="mb-3 form-select" name="is_volunteer" id="is_volunteer">
                                        <option value="1">Add to the volunteer group</option>
                                        <option value="0">Remove to the volunteer group </option>
                                    </select>

                                    <button type="submit" class="btn btn-primary deactivate-account">submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

</main>

<?= $this->endSection() ?>