<?= $this->extend('admin_Layout') ?>
<?= $this->section('main') ?>


<main>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Events /</span> View subscribe </h4>
            <hr class="my-5" />
            <div class="card">

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Type</th>
                                <th>Attend</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php foreach ($registerData as $row) : ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['user_name'] ?></td>
                                    <td>
                                        <?php if ($row['type'] == 1) : ?>
                                            Volunteer
                                        <?php else : ?>
                                            Present
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($row['attend'] == 0) : ?>
                                            <form action="/admin/events/update-attend" method="post">
                                                <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                                                <input type="hidden" name="event_id" value="<?= $row['event_id'] ?>">
                                                <button type="submit" class="btn btn-primary">Attend</button>
                                            </form>
                                        <?php else : ?>
                                            Attended
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $row['created_at'] ?></td>
                                    <?php if (in_groups('admin')) : ?>
                                        <td><a class="dropdown-item" href="<?= base_url() ?>admin/users/edit_user/<?= $row['user_id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a></td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
</main>

<?= $this->endSection() ?>