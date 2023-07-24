<?= $this->extend('admin_layout') ?>
<?= $this->section('main') ?>

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users /</span> Manage Users</h4>

    <hr class="my-5" />

    <!-- Hoverable Table rows -->
    <div class="card">
      <h5 class="card-header">Users</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone</th>
              <th>Avatar</th>
              <th>Active?</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php if ($users) : ?>
              <?php foreach ($users as $user) : ?>
                <?php
                $avatar_path = render_user_avatar($user->avatar);
                $user_active = render_user_active($user->active);
                $user_group = render_user_groups($user);
                ?>
                <tr>
                  <th scope="row"><?= $user->id ?></th>
                  <td><?= $user->username ?></td>
                  <td><?= $user->first_name ?></td>
                  <td><?= $user->last_name ?></td>
                  <td><?= $user->phone ?></td>
                  <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="<?= $user->username ?>">
                        <img src="<?= $avatar_path ?>" alt="Avatar" class="rounded-circle" />
                      </li>
                    </ul>
                  </td>
                  <td><?= $user_active ?></td>

                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url() ?>admin/users/edit_user/<?= $user->id ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="<?= base_url() ?>admin/delete_user/<?= $user->id ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="6">No records found</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Hoverable Table rows -->

    <hr class="my-5" />
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
  </div>
  <?= $this->endSection() ?>