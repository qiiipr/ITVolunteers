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

                <?php if ($events) : ?>
                    <?php foreach ($events as $event) : ?>
                        <?php
                        $event_image_path = render_event_image($event->image);
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="causes-item bg-white">
                                <a href="#"><img src="<?= $event_image_path ?>" alt="Image" class="img-fluid mb-4 rounded"></a>
                                <div class="px-4 pb-5 pt-3">
                                    <h3><a href="<?= base_url("/events/show/" . $event->id) ?>"><?= $event->name ?></a></h3>
                                    <p><?= $event->description ?></p>

                                    <div class="d-flex mb-4 justify-content-between amount">
                                        <div>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            <p> Crate by : <?= $event->user->username ?></p>
                                        </div>
                                        <div>

                                            <i class=" bi-person custom-icon me-1"></i>
                                            <p>Volunteer Hours : <?= $event->volunteer_hrs ?></p>
                                        </div>
                                    </div>
                                    <div class="text-black  d-flex mb-4 justify-content-between amount">
                                        <div>

                                            <i class="text-black bi-person custom-icon me-1"></i>
                                            <p>date : <?= $event->date ?></p>
                                        </div>
                                        <div>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            <p>location : <?= $event->location ?></p>
                                        </div>
                                    </div>
                                    <div>

                                        <hr>
                                        <h3><a class="btn btn-primary" href="<?= base_url("/events/show/" . $event->id) ?>">Join now</a></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    No results found!
                <?php endif; ?>

            </div>
        </div>
    </div>


</main>

<?= $this->endSection() ?>