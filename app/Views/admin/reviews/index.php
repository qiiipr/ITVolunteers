<?= $this->extend('admin_layout') ?>
<?= $this->section('main') ?>

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Reviews /</span> Manage Reviews</h4>

    <hr class="my-5" />

    <!-- Hoverable Table rows -->
    <div class="card">
      <h5 class="card-header">Reviews</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Comment</th>
              <th>Rate</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php if ($reviews) : ?>
              <?php foreach ($reviews as $review) : ?>
                <tr>
                  <th scope="row"><?= $review->id ?></th>
                  <td><?= $review->comment ?></td>
                  <td><?= $review->rate ?></td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url() ?>admin/reviews/edit_review/<?= $review->id ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="<?= base_url() ?>admin/delete_review/<?= $review->id ?>"><i class="bx bx-trash me-1"></i> Delete</a>
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