<?= $this->extend('event_layout') ?>

<?= $this->section('pageStyles') ?>
<style>
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
    }

    .rating>input {
        display: none;
    }

    .rating>label {
        position: relative;
        width: 1em;
        font-size: 1.5rem;
        color: #FFD600;
        cursor: pointer;
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0;
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important;
    }

    .rating>input:checked~label:before {
        opacity: 1;
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('main') ?>

<?php

use PhpParser\Node\Expr\BinaryOp\LogicalAnd;

$event_status = render_event_status($event->active);
$event_image_path = render_event_image($event->image);

?>

<main>

    <div class="section bg-light">
        <div class="container">
            <div class="card mb-3 bg-light border-0">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="col-lg-10 col-10">
                            <?= view('Views\_message_block') ?>
                        </div>
                        <a href="#"><img src="<?= $event_image_path ?>" alt="Image" class="img-fluid rounded-start " style="width:100%;height:100%"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body ms-3">
                            <h1 class="card-title"><?= $event->name ?></h1>
                            <p><?= $event_status ?></p>
                            <?php if (logged_in() && ($event->subscribe != NULL)) : ?>
                                <?php if ($event->subscribe['type'] == 1) : ?>
                                    <span class="badge bg-info mb-3 fs-6">Volunteer</span>
                                <?php else : ?>
                                    <span class="badge bg-info mb-3 fs-6">Present</span>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if ($event->category) : ?>
                                <p>Category : <?= $event->category ?>
                                </p>
                            <?php endif; ?>
                            <p><i class="fas fa-calendar-alt me-2" style='color:#429e6a;display:inline;'></i><strong>date :</strong> <?= $event->date ?></p>
                            <p><i class='fa-solid fa-location-dot me-2' style='color:#429e6a;display:inline;'></i><strong>location :</strong> <?= $event->location ?></p>
                            <p><i class="fas fa-clock me-2" style='color:#429e6a;display:inline;'></i><strong>Volunteer Hours :</strong> <?= $event->volunteer_hrs ?></p>
                            <p class="small mb-0 "><?= $event->description ?></p>
                            <div>
                                <?php if (logged_in() && $event->active == 1) : ?>
                                    <h4 class="mt-4 ">Are you Volunteer or Present ?</h4>
                                    <form action="<?= site_url('events/saveRegistration') ?>" method="post">
                                        <?= form_hidden('user_id', user()->id) ?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="volunteer" value="1">
                                            <label class="form-check-label fs-5" for="volunteer">volunteer</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type" id="client" value="0">
                                            <label class="form-check-label fs-5" for="client">Present</label>
                                        </div>
                                        <div class="pt-4">
                                            <input type="hidden" name="event_id" value="<?= $event->id ?>">
                                            <button type="submit" class="btn btn-primary ">Subscribe</button>
                                        </div>
                                    </form>
                                <?php elseif ($event->active == 2) : ?>
                                    <h5>This Event had Finished</h5>
                                <?php elseif ($event->active == 0) : ?>
                                    <h5>This Event hadn't Activated yet</h5>
                                <?php else : ?>
                                    Register or Login to subscribe to this Event
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5 py-5">
                <div class="row d-flex justify-content-start">
                    <div class="col-md-12 col-lg-10 col-xl-8">
                        <div class="card bg-light border-0">
                            <div class="card-body">
                                <div class="d-flex flex-start align-items-center">
                                    <?php if ($event_reviews) : ?>
                                        <?php foreach ($event_reviews as $event_review) : ?>
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0">
                                                    <?php if (!logged_in()) : ?>
                                                        <img class="rounded-circle shadow-1-strong me-3" src="<?= render_user_avatar(user()->avatar) ?>" width="60" height="60" alt="User Avatar">
                                                    <?php else : ?>
                                                        <img class="rounded-circle shadow-1-strong me-3" src="<?= render_user_avatar(user()->avatar) ?>" width="60" height="60" alt="User Avatar">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="ms-3 flex-shrink-1">
                                                    <h6 class="fw-bold text-black mb-1"><?= $event_review->user ?></h6>
                                                    <p class="text-muted small mb-0"><?= $event_review->created_at ?></p>
                                                    <?= render_user_rate($event_review->rate) ?>
                                                    <p class="text-sm mb-0 text-muted">
                                                    <p class="mt-3 mb-4 pb-2">
                                                        <?= $event_review->comment ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p>No reviews yet!</p>
                                    <?php endif; ?>
                                </div>

                                <h4 class="mb-4">Leave a review</h4>
                                <?= form_open("events/addReview") ?>
                                <?= form_hidden('event_id', $event->id) ?>
                                <?= (logged_in()) ? form_hidden('user_id', user()->id) : '' ?>
                                <div class="d-flex my-3" style="align-items: center;">
                                    <p class="mb-0 mr-2">Your Rating *: &nbsp;</p>
                                    <div class="text-primary">
                                        <div class="rating">
                                            <input type="radio" name="rate" value="5" id="5" required><label for="5">☆</label>
                                            <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer py-3 border-0" style="background-color: #59886b73;">
                                    <div class="d-flex flex-start w-100">
                                        <div class="form-outline w-100">
                                            <textarea class="form-control" name="comment" id="comment" rows="4" style="background: #fff;"></textarea>
                                            <label class="form-label" for="textAreaExample">Your reviwe</label>
                                        </div>
                                    </div>
                                    <div class="float-end mt-4 pt-1">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                    <?= form_close() ?>
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