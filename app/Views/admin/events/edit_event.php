<?= $this->extend('admin_Layout') ?>
<?= $this->section('main') ?>
<?php
$event_status = render_event_status($event->active);
$event_image_path = render_event_image($event->image);
?>
<main>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin Dashboard /</span>Edit Event</h4>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Event</a>
                        </li>
                    </ul>
                    <div class="card mb-4">
                        <h5 class="card-header">Event Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-5 p-4">
                                <img src="<?= $event_image_path ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />

                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="form-group">

                                        <form class="custom-form donate-form" action="<?= base_url() ?>admin/update_event" method="post" role="form">
                                            <?= csrf_field() ?>
                                            <?= form_hidden('id', $event->id) ?>
                                            <h3 class="mb-4">Edit Event</h3>

                                            <div class="row">

                                                <div class="col-lg-12 col-12">
                                                    <?= view('Views\_message_block') ?>
                                                </div>

                                                <div class="col-lg-12 col-12">
                                                    <h5 class="mt-1">Event Info</h5>
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="name" class="form-label">title</label>
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name of Event" value="<?= (old('name')) ? old('name') : $event->name ?>">
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="location" class="form-label">location</label>
                                                    <input type="text" name="location" id="location" class="form-control" placeholder="Location" value="<?= (old('location')) ? old('location') :  $event->location ?>">
                                                </div>

                                                <div class="mb-3 col-md-6">
                                                    <label for="volunteer_hrs" class="form-label">volunteer Hours</label>
                                                    <input type="text" name="volunteer_hrs" id="volunteer_hrs" class="form-control" placeholder="volunteer houres" value="<?= (old('volunteer_hrs')) ? old('volunteer_hrs') :  $event->volunteer_hrs ?>">
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="date" class="form-label">date</label>
                                                    <input type="datetime-local" name="date" id="date" class="form-control" placeholder="date" value="<?= (old('date')) ? old('date') :  $event->date ?>">
                                                </div>
                                                <?php if (in_groups('admin')) : ?>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="active">Active or Inactive</label>
                                                        <select name="active" id="active" class="form-control">
                                                            <option value="1">Active</option>
                                                            <option value="2">done</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="mb-3 col-md-6">
                                                    <label for="active">Category</label>
                                                    <select class="form-select" name="category" aria-label="category">
                                                        <option value="0">Select category</option>
                                                        <option value="Hardware Repair" <?php echo ($event->category == 'Hardware Repair') ? 'selected' : ''; ?>>Hardware Repair</option>
                                                        <option value="Programming Consulting" <?php echo ($event->category == 'Programming Consulting') ? 'selected' : ''; ?>>Programming Consulting</option>
                                                        <option value="Problem Solving" <?php echo ($event->category == 'Problem Solving') ? 'selected' : ''; ?>>Problem Solving</option>
                                                        <option value="Government Registration" <?php echo ($event->category == 'Government Registration') ? 'selected' : ''; ?>>Government Registration</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="description" class="form-label">description</label>
                                                    <textarea type="description" name="description" id="description" class="form-control" placeholder="description"><?= (old('description')) ? old('description') :  $event->description ?></textarea>
                                                </div>
                                                <div class="col-lg-12 col-12 mt-2">
                                                    <button type="submit" class="btn btn-primary deactivate-account">submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
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