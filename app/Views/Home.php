<?= $this->extend('event_layout') ?>
<?= $this->section('main') ?>

<body>
    <main>
        <div class="hero overlay" style="background-image: url('<?= base_url() ?>events/assets/images/taif.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 text-left">
                        <span class="subheading-white fs-4 text-white mb-3" data-aos="fade-up">ITVolunteer</span>
                        <h1 class="heading text-white mb-2" data-aos="fade-up">Give a helping hand to those who need it in Taif university!</h1>
                        <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">we can make the world thechology esey togather .</p>
                        <p data-aos="fade-up" data-aos-delay="100">
                            <a href="<?= url_to('register') ?>" class="btn btn-primary fs-5 me-4 d-inline-flex align-items-center"> <span class="me-2"></span><span>join Now</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="vision">
                            <h2>Our Vision</h2>
                            <p class="mb-4 lead fs-4">To be the leading online platform for IT volunteers at Taif University to connect with and support the university community.</p>
                            <p><a href="<?= base_url('pages/about') ?>" class="link-underline">Learn More</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="mission">
                            <h2>Our Mission</h2>
                            <p class="mb-4 lead fs-4">To empower IT professionals at Taif University to use their skills and expertise to make a positive impact on the university community.</p>
                            <p><a href="<?= base_url('pages/about') ?>" class="link-underline">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section flip-section" style="background-image: url('<?= base_url() ?>events/assets/images/volunteerH.jpg')">
            <div class="blob-1">
                <img src="<?= base_url() ?>events/assets/images/blob.png" alt="Image" class="img-fluid">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-7 text-center" data-aos="fade-up">
                        <span class="subheading-white mb-3 fs-4 text-white">Help Now</span>
                        <h2 class="heading text-white">Help Today</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-flip">
                            <div class="flip">
                                <div class="front">
                                    <!-- front content -->
                                    <div class="flip-content-wrap">
                                        <i class='fa fa-cogs' style="font-size:50px;color:#ead54d"></i>
                                        <h3 class="pt-3">fix proplem</h3>
                                    </div>
                                </div>
                                <div class="back">
                                    <!-- back content -->
                                    <div class="flip-content-wrap">
                                        <h3>fix proplem</h3>
                                        <p>make skill help pepole in their techonlogy proplem</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-flip">
                            <div class="flip">
                                <div class="front">
                                    <!-- front content -->
                                    <div class="flip-content-wrap">

                                        <i class='fa fa-university' style='font-size:50px;color:#fbdf2d'></i>
                                        <h3 class="pt-3">Sudents</h3>
                                    </div>
                                </div>
                                <div class="back">
                                    <!-- back content -->
                                    <div class="flip-content-wrap">
                                        <h3>Sudents</h3>
                                        <p>To help students complete their volunteer hours and support their skills</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-flip">
                            <div class="flip">
                                <div class="front">
                                    <!-- front content -->
                                    <div class="flip-content-wrap">
                                        <i class='fas fa-hand-holding-heart' style="font-size:50px;color:#ead54d"></i>
                                        <h3 class="pt-3">elderly pepole</h3>
                                    </div>
                                </div>
                                <div class="back">
                                    <!-- back content -->
                                    <div class="flip-content-wrap">
                                        <h3>elderly pepole</h3>
                                        <p>many old pepole have diifcult with technology</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-flip">
                            <div class="flip">
                                <div class="front">
                                    <!-- front content -->
                                    <div class="flip-content-wrap">
                                        <i class='fa-solid fa-handshake-angle' style="font-size:50px;color:#ead54d"></i>
                                        <h3 class="pt-3">volunteer envormint</h3>
                                    </div>
                                </div>
                                <div class="back">
                                    <!-- back content -->
                                    <div class="flip-content-wrap">
                                        <h3>volunteer envormint</h3>
                                        <p>support and incress volunteer community.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



        <div class="section">
            <div class="container">
                <div class="row mb-5 align-items-center justify-content-between">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                        <span class="subheading mb-3">Who we are</span>
                        <h2 class="heading">About Us</h2>
                        <p><strong>Welcome to our IT volunteer website at Taif University!</strong>
                            We are a group of students and IT professionals who are passionate
                            about using technology to make a positive impact on our campus and community.
                        </p>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <blockquote class="text-white" style="background-color: #234e2d;">
                            " The best way to find yourself is to lose yourself in the service of others." - Mahatma Gandhi </blockquote>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">

                        <ul class="nav nav-pills mb-5 custom-nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission" aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-values-tab" data-bs-toggle="pill" data-bs-target="#pills-values" type="button" role="tab" aria-controls="pills-values" aria-selected="false">Our Values</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab">
                                <h2 class="mb-3  fw-bold" style="color:#234e2d;">Our Mission</h2>
                                <p>Our mission is to use our IT skills to make a difference in the world. We believe that everyone
                                    has the right to access the benefits of technology, regardless of their background or
                                    circumstances. That's why we volunteer our time and expertise to help non-profit organizations and
                                    other community groups use technology to achieve their goals.</p>
                                <p class=" mt-3">
                                    <a href="<? base_url('pages/about') ?>" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab">
                                <h2 class="mb-3  fw-bold" style="color:#234e2d;">Our Values</h2>
                                <p><strong>We believe in the following values:</strong></p>
                                <p><strong>Service:</strong> We are committed to serving others and using our skills to make a difference in the world.</p>
                                <p><strong>Collaboration</strong>We believe that working together is the best way to achieve our goals.</p>
                                <p><strong>Innovation:</strong> We are always looking for new ways to use technology to help others.</p>
                                <p><strong>Excellence: </strong>We strive to provide the highest quality of service to our clients.</p>
                                <p class="mt-5">
                                    <a href="<? base_url('pages/about') ?>" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="overlap-imgs">
                            <img src="<?= base_url() ?>events/assets/images/r4.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos="100">
                            <img src="<?= base_url() ?>events/assets/images/taif_university.jpg" alt="Image" class="img-fluid rounded pt-2" data-aos="fade-up" data-aos="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section cause-section bg-light">

            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <span class="subheading mb-3">Event</span>
                        <h2 class="heading">Featured Event</h2>

                        <p> We offer a variety of IT services.</p>


                        <div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                            <button class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev"> <span class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
                            <button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-5">
                <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-slider" id="features-slider">

                        <?php foreach ($events as $event) : ?>
                            <?php if ($event->active == 1) : ?>
                                <?php
                                $event_image_path = render_event_image($event->image);
                                ?>
                                <div class="item">
                                    <div class="causes-item bg-white">

                                        <a href="<?= base_url("/events/show/" . $event->id) ?>"><img src="<?= $event_image_path ?>" alt="Image" class="img-fluid mb-4 rounded"></a>
                                        <div class="px-4 pb-5 pt-3">

                                            <h3><a href="<?= base_url("/events/show/" . $event->id) ?>"><?= $event->name ?></a></h3>
                                            <p><?= $event->description ?></p>
                                            <p><strong>Created by: </strong><?= $event->user->username ?></p>
                                            <p><strong>Volunteer Hours: </strong><?= $event->volunteer_hrs ?></p>

                                            <hr>

                                            <div class="d-flex mb-4 justify-content-between amount">
                                                <div><strong>Location: </strong><?= $event->location ?></div>
                                                <div><strong>Date: </strong><?= $event->date ?></div>
                                            </div>
                                            <div>
                                                <a href="<?= base_url("/events/show/" . $event->id) ?>" class="btn btn-primary">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
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
</body>

<?= $this->endSection() ?>