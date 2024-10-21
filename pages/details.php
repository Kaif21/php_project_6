<?php include 'includes/header.php' ?>
<!-- top banner -->
<div class="container my-5">
    <div class="row ">
        <div class="col-md-12">
            <img src="<?php echo $course['image_url']; ?>" class="img-fluid d-none d-lg-block my-2 rounded" alt="...">
            <img src="<?php echo $course['image_url']; ?>" class="img-fluid d-block d-lg-none my-2 rounded-2" alt="...">
            <div class="card mb-3 shadow-lg">

                <div class="card-body text-center my-2">
                    <h1 class="card-title fs-3 fw-bold text-brand-color"><?php echo $course['title']; ?></h1>
                    <p class="card-text text-black"><?php echo $course['description']; ?></p>
                    <button type="button" class="btn btn-success rounded-pill py-1 px-3 fs-5">Enroll Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top banner -->
<!-- At a glance -->
<div class="container p-4">
    <div class="text-center mb-5">
        <h2>Quick Look</h2>
        <hr class="w-25 mx-auto">
    </div>
    <div class="row mt-3  border rounded border-5 p-5 border-brand-color bg-brand-color text-white text-center">
        <div class="col-md-4 border-end ">
            <h6 class="fs-4 text-white-50 fst-italic">Duration</h6>
            <p class="fs-1 border-top"><?php echo $course['duration']; ?></p>

        </div>
        <div class="col-md-4 border-end ">
            <h6 class="fs-4 text-white-50 fst-italic">Last Registration Date</h6>
            <p class="fs-1 border-top"><?php echo $course['last_date']; ?></p>

        </div>
        <div class="col-md-4 ">
            <h6 class="fs-4 text-white-50 fst-italic">No. of classes</h6>
            <p class="fs-1 border-top fw-bold"><?php echo $course['no_classes']; ?></p>
        </div>
        <hr class="bg-brand-color my-5 d-none d-lg-block d-md-block">
        <div class="col-md-6 border-end ">
            <h6 class="fs-4 text-white-50 fst-italic">Total Hours</h6>
            <p class="fs-1 border-top fw-bold"><?php echo $course['total_hours']; ?></p>

        </div>
        <div class="col-md-6">
            <h6 class="fs-4 text-white-50 fst-italic">Schedule</h6>
            <p class="fs-1 border-top"><?php echo $course['schedule_time']; ?><br>
                <span class="fs-6"><?php echo $course['schedule_day']; ?></span>
            </p>
        </div>
    </div>
</div>
<!-- At a glance -->
<!-- learn -->
<div class="container">
    <div class="my-5">
        <div class="text-center mb-5">
            <h2>What Will You Learn</h2>
            <hr class="w-25 mx-auto">
        </div>
        <!-- flex container for items -->
        <!-- flex container for items -->
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <?php foreach ($course['technology'] as $tech): ?>
                <div class="flex-item">
                    <div class="text-white fs-5 shadow py-2 text-center rounded-pill bg-brand-color">
                        <?php echo $tech; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- learn -->
<!-- what's included -->
<div class="container d-none d-lg-block w-50 my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>What's in this course</h2>
            <hr class="w-25 mx-auto">
        </div>
        <!-- cols -->
        <div class="col-md-3  text-center py-2"><span class="fs-1 fw-bolder text-brand-color">10+</span><br>
            Modules</div>
        <div class="col-md-3 text-center py-2"><span class="fs-1 fw-bolder text-brand-color"><?php echo $course['videos']; ?>+</span><br>
            Videos</div>
        <div class="col-md-3 text-center py-2"><span class="fs-1 fw-bolder text-brand-color"><?php echo $course['resources']; ?>+</span><br>
            Resources</div>
        <div class="col-md-3 text-center py-2"><span class="fs-1 fw-bolder text-brand-color"><?php echo $course['projects']; ?>+</span><br>
            Projects</div>
        <!-- cols -->
    </div>
</div>
<div class="container d-block d-lg-none my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>What's in this course</h2>
            <hr class="w-25 mx-auto">
        </div>
        <!-- cols -->
        <div class="d-flex flex-wrap justify-content-center gap-3 ">
            <div class=" text-center py-2 text-brand-color"><span class="fs-1 fw-bolder">10+</span><br>
                Modules</div>
            <div class="text-center py-2 text-brand-color"><span class="fs-1 fw-bolder">10+</span><br>
                Modules</div>
            <div class="text-center py-2 text-brand-color"><span class="fs-1 fw-bolder">10+</span><br>
                Modules</div>
            <div class="text-center py-2 text-brand-color"><span class="fs-1 fw-bolder">10+</span><br>
                Modules</div>
            <!-- cols -->
        </div>
    </div>
</div>
<!-- what's included -->
<!-- course modules -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Course Modules</h2>
            <hr class="w-25 mx-auto">
        </div>
        <div class="col-md-12">
            <div class="accordion module-accordion" id="module-accordion">
                <?php foreach ($course['modules'] as $index => $module): ?>
                <div class="module-item border border-2 my-2 p-2 rounded" style="border-color: #8B37FF !important;">
                    <div class="module-header" id="module-heading-1">
                        <h4 class="module-title mb-0">
                            <a class="card-toggle module-toggle text-decoration-none fw-bold text-brand-color" href="#module-1"
                                data-bs-toggle="collapse" data-bs-target="#module-1" aria-expanded="true"
                                aria-controls="module-1">
                                <i class="module-toggle-icon fas fa-minus me-2"></i>
                                <?php echo $module['modules_title']; ?>
                            </a>
                        </h4>
                    </div><!--//card-header-->

                    <div id="module-1" class="module-content collapse show" aria-labelledby="module-heading-1">
                        <div class="card-body p-0">
                            <div class="module-sub-item p-3">
                                <ul style="color: #8B37FF;" class="">
                                <?php foreach ($module['modules_content'] as $content): ?>
                                            <li><?php echo $content; ?></li>
                                        <?php endforeach; ?>
                                </ul>
                            </div><!--//module-sub-item-->
                        </div><!--//card-body-->
                    </div><!--//module-content-->
                </div><!--//module-item-->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- course modules -->
<!-- about tutotr -->
<div class="bg-brand-color">
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3 bg-transparent border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $course['teacher_img']; ?>"
                                class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-8 my-auto">
                            <div class="card-body text-white">
                                <h5 class="card-title bg-transparent fs-3 text-white-50">Meet The Tutor</h5>
                                <h5 class="card-title bg-transparent fs-1"><?php echo $course['teacher_name']; ?></h5>
                                <p class="card-text"><?php echo $course['teacher_details']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about tutor -->
<!-- more courses from institute -->
<!-- <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card">
                        <img src="<?php echo $courses['image_url']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo $courses['title']; ?></h5>
                            <p class="card-text text-dark-emphasis"><?php echo $courses['description']; ?></p>
                            <div class="d-flex">
                                <p class="card-text me-2"><small class="text-muted">Duration: <?php echo $courses['duration']; ?> </small></p> |
                                <p class="card-text ms-2"><small class="text-muted">Total Class: <?php echo $courses['total_classes']; ?></small></p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="card-text">BDT <?php echo $courses['price']; ?></p>
                                <p class=" card-text"><a href="<?php echo $courses['image_url']; ?>">Enroll Now</a></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div> -->
<!-- more courses from institute -->
<!-- MAIN CONTENT -->
<?php include 'includes/footer.php' ?>