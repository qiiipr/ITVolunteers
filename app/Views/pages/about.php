<?= $this->extend('event_layout') ?>
<?= $this->section('main') ?>

<main>

    <div class="hero overlay" style="background-image: url('<?= base_url() ?>events/assets/images/green.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">About Us</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">We are proud of the impact we have made on the lives of so many people. We are committed to continuing our work and making a difference in the world..</p>

                </div>
            </div>
        </div>
    </div>

    <div class="section sec-about">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-lg-6 has-bg" data-aos="fade-right">
                    <img src="<?= base_url() ?>events/assets/images/mission.jpg" alt="Image" class="img-fluid img-box-shadow rounded">
                </div>
                <div class="col-lg-4 align-self-center" data-aos="fade-left" data-aos-delay="100">
                    <span class="subheading mb-3">About</span>
                    <h2 class="heading mb-4">About us</h2>
                    <p>We are a group of IT professionals who are passionate about using our skills to make a difference in the world. We believe that everyone has the right to access the benefits of technology, regardless of their background or circumstances. That's why we volunteer our time and expertise to help non-profit organizations and other community groups use technology to achieve their goals.

                        We offer a variety of IT services, including:
                        IT consulting,
                        Computer and network support,
                        fix problem,
                        help register in govenrment service...etc

                    </p>

                </div>
            </div>
        </div>
    </div>


    <div class="section sec-features bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4" data-aos="fade-up">
                    <span class="subheading mb-3">The Team</span>
                    <h2 class="heading">Who We Are</h2>
                </div>
                <div class="col-lg-6 text-start" data-aos="fade-up" data-aos-delay="100">
                    <p>As an IT volunteer, you will have the opportunity to work with a team of experienced professionals and to learn about the latest IT technologies. You will also have the opportunity to make a positive impact on the university community..</p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="features-slider-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="features-slider" id="features-slider">
                    <div class="item">
                        <div class="feature bg-color-1">
                            <img src="<?= base_url() ?>events/assets/images/taifun2.png" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Taif University</h3>
                            <span class="text-black-50 mb-3 d-block"> IT department at Taif University</span>
                            <p class="text-black-50">responsible for helping to maintain and improve the university's IT infrastructure.</p>
                        </div>

                    </div>

                    <div class="item">

                        <div class="feature bg-color-2">
                            <img src="<?= base_url() ?>events/assets/images/Dab.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">Abduallah .baqasah</h3>
                            <span class="text-black-50 mb-3 d-block">Assistant Professor</span>
                            <p class="text-black-50">To support student team for volunteer and use IT skill for help other .</p>
                        </div>

                    </div>

                    <div class="item">

                        <div class="feature bg-color-3">
                            <img src="<?= base_url() ?>events/assets/images/ITstudent.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">

                            <h3 class="mb-0">IT Students</h3>
                            <span class="text-black-50 mb-3 d-block">Students at information technology college </span>
                            <p class="text-black-50">IT volunteers can provide technical support to students and staff at the university. </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <div id="features-slider-nav">
                        <button class="btn btn-primary" class="prev" data-controls="prev">Prev</button>
                        <button class="btn btn-primary" class="next" data-controls="next">Next</button>
                    </div>
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
                        <p class="mb-4 lead">To be the leading online platform for IT volunteers at Taif University to connect with and support the university community.</p>
                        <p><a href="<?= base_url('pages/about') ?>" class="link-underline">Learn More</a></p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="mission">
                        <h2>Our Mission</h2>
                        <p class="mb-4 lead">To empower IT professionals at Taif University to use their skills and expertise to make a positive impact on the university community.</p>
                        <p><a href="<?= base_url('pages/about') ?>" class="link-underline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>