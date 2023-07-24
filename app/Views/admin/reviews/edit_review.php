<?= $this->extend('admin_Layout') ?>
<?= $this->section('main') ?>

<main>
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Manage Review /</span>Review</h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Review</a>
                        </li>

                    </ul>
                    <div class="card mb-4">
                        <h5 class="card-header">Review Details</h5>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-5 p-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group">

                                            <form class="custom-form donate-form" action="<?= base_url() ?>admin/update_review" method="post" role="form">
                                                <?= csrf_field() ?>
                                                <?= form_hidden('id', $review->id) ?>
                                                <h3 class="mb-4">Edit Review</h3>

                                                <div class="row">

                                                    <div class="col-lg-12 col-12">
                                                        <?= view('Views\_message_block') ?>
                                                    </div>

                                                    <div class="col-lg-12 col-12 mt-2">
                                                        <label>Comment</label>
                                                        <input type="text" name="comment" id="comment" class="form-control" placeholder="Comment" value="<?= (old('comment')) ? old('comment') : $review->comment ?>">
                                                    </div>

                                                    <div class="col-lg-12 col-12 mt-2">
                                                        <label>Rate</label>
                                                        <input type="number" name="rate" id="rate" class="form-control" placeholder="Rate" value="<?= (old('rate')) ? old('rate') :  $review->rate ?>">
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
    </div>
</main>

<?= $this->endSection() ?>