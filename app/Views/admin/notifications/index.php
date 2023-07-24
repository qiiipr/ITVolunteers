<?= $this->extend('admin_layout') ?>
<?= $this->section('main') ?>



<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events /</span> New Events</h4>

    <hr class="my-5" />

    <!-- Hoverable Table rows -->
    <div class="card">
      <h5 class="card-header">Events</h5>
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Event Name</th>
              <th>Location</th>
              <th>Date</th>
              <th>Description</th>
              <th>Volunteer Hours</th>
              <th>Active</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php if ($events) : ?>
              <?php foreach ($events as $event) : ?>
                <?php
                $event_image_path = render_event_image($event->image);
                ?>
                <tr>
                  <th scope="row"><?= $event->id ?></th>
                  <td><?= $event->name ?></td>
                  <td><?= $event->location ?></td>
                  <td><?= $event->date ?></td>
                  <td><?= $event->description ?></td>
                  <td><?= $event->volunteer_hrs ?></td>
                  <td>
                    <?php if ($event->active == 0) : ?>
                      <form action="/admin/events/activate-event" method="post">
                        <input type="hidden" name="event_id" value="<?= $event->id ?>">
                        <button type="submit" class="btn btn-primary">Activate</button>
                      </form>
                    <?php endif; ?>
                  </td>
                  <td>
                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                      <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="<?= $event->name ?>">
                        <img src="<?= $event_image_path ?>" alt="Avatar" class="rounded-circle" />
                      </li>
                    </ul>

                  </td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url() ?>admin/events/edit_event/<?= $event->id ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="<?= base_url() ?>admin/events/<?= $event->id ?>"><i class="bx bx-edit-alt me-1"></i> View</a>
                        <a class="dropdown-item" href="<?= base_url() ?>admin/delete_event/<?= $event->id ?>"><i class="bx bx-trash me-1"></i> Delete</a>
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