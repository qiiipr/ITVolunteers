<?= $this->extend('event_layout') ?>
<?= $this->section('main') ?>

<main>
    <div class="hero overlay" style="background-image: url('<?= base_url() ?>events/assets/images/pc2.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <span class="subheading-white text-white mb-3 fs-4" data-aos="fade-up">Events</span>

                    <h1 class="heading text-white mb-2" data-aos="fade-up">The Events</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-70">To be hand in hand for those who need technical solutions and to promote technical volunteering in the Kingdom of Saudi Arabia</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <!-- <a href="#" class="btn btn-primary me-4">Volunteer Now</a> -->
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-12 mx-auto mt-4 mt-lg-0">
        <form class="custom-form search-form" action="<?= site_url('search') ?>" method="post" role="form">
            <input class="form-control" type="search" name="term" placeholder="Search" aria-label="Search">

            <button type="submit" class="form-control">
                <i class="bi-search"></i>
            </button>
        </form>
    </div>
    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <?= view('Views\_message_block') ?>
                </div>

                <?php foreach ($events as $event) : ?>
                    <?php if ($event->active == 1 || $event->active == 2 || $event->active == 0) : ?>
                        <?php
                        $event_image_path = render_event_image($event->image);
                        $event_status = render_event_status($event->active);
                        ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="causes-item bg-white">
                                <a href="<?= base_url("/events/show/" . $event->id) ?>"><img src="<?= $event_image_path ?>" alt="Image" class="img-fluid mb-4 rounded"></a>
                                <div class="px-4 pb-5 pt-3">
                                    <h3><a href="<?= base_url("/events/show/" . $event->id) ?>"><?= $event->name ?></a></h3>
                                    <p><?= $event_status ?></p>
                                    <?php if (logged_in() && ($event->subscribe != NULL)) : ?>
                                        <?php if ($event->subscribe['type'] == 1) : ?>
                                            <span class="badge bg-info fs-6">Volunteer</span>
                                        <?php else : ?>
                                            <span class="badge bg-info fs-6">Present</span>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <div class="d-flex mb-4 justify-content-between amount">
                                        <div>
                                            <i class=""></i>
                                            <p> create by : <?= $event->user->username ?>
                                            </p>
                                            <i class=""></i>
                                            <p>Volunteer Hours : <?= $event->volunteer_hrs ?></p>

                                            <i class=""></i>
                                            <p class="small mb-0 "><?= $event->description ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4 justify-content-between amount">
                                        <div><strong>Location: </strong><?= $event->location ?></div>
                                        <div><strong>Date: </strong><?= $event->date ?></div>
                                    </div>
                                    <div>
                                        <h3><a class="btn btn-primary" href="<?= base_url("/events/show/" . $event->id) ?>">Show More</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="section flip-section secondary-bg" style="background-color:#234e2d;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
                    <h3 class="mb-4 heading text-white" data-aos="fade-up">Let's Help The Unfortunate People </h3>
                    <a href="<? base_url('register') ?>" class="btn btn-outline-white me-3" data-aos="fade-up" data-aos-delay="100">Become a Volunteer</a>
                </div>
            </div>
        </div>
    </div>


</main>

<?= $this->endSection() ?>