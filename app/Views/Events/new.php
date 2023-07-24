<?= $this->extend('event_layout') ?>
<?= $this->section('main') ?>

<main>

    <section class="donate-section">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">

                    <form class="custom-form donate-form" action="<?= base_url() ?>/events/create" method="post" role="form" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <?= form_hidden('user_id', user()->id) ?>
                        <h3 class="mb-4">Add Event</h3>

                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <?= view('Views\_message_block') ?>
                            </div>

                            <div class="col-lg-12 col-12">
                                <h5 class="mt-1">Event Info *</h5>
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name of Event" value="<?= old('name') ?>">
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <input type="text" name="location" id="location" class="form-control" placeholder="Location" value="<?= old('location') ?>">
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <input type="datetime-local" name="date" id="date" class="form-control" placeholder="date">
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <textarea type="description" name="description" id="description" class="form-control" placeholder="description"></textarea>
                            </div>
                            <div class="col-lg-12 col-12 mt-2">
                                <input type="file" name="image" class="form-control" placeholder="Upload image.." id="image">
                            </div>
                            <!-- <div class="col-lg-6 col-12 mt-2">
                                <select name="active" id="active" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div> -->

                            <div class=" col-lg-6 col-12 mt-2">
                                <input type="text" name="volunteer_hrs" id="volunteer_hrs" class="form-control" placeholder="volunteer houres" value="<?= old('volunteer_hrs') ?>">
                            </div>
                            <div class="col-lg-12 col-12 mt-2 p-2 ">
                                <select class="form-select" name="category" aria-label="category">
                                    <option selected value="0">Select category</option>
                                    <option value="Hardware Repair">Hardware Repair</option>
                                    <option value="Progrmmanig Consulting">Progrmmanig Consulting</option>
                                    <option value="Problem Solving">Problem Solving</option>
                                    <option value="Government Registration">Government Registration</option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-12 mt-2">
                                <button type="submit" class="form-control mt-4">send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection() ?>