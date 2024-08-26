<?php include 'includes/header.php' ?>
<div class="container mt-4">
    <div class="row">
        <?php foreach ($course as $courses) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                <img src="<?php echo $courses['image_url']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $courses['title']; ?></h5>
                        <p class="card-text"><?php echo $courses['description']; ?></p>
                        <div class="d-flex">
                            <p class="card-text me-2"><small class="text-muted">Duration: <?php echo $courses['duration']; ?> </small></p> | 
                            <p class="card-text ms-2"><small class="text-muted">Total Class: <?php echo $courses['total_classes']; ?></small></p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p class="card-text">BDT <?php echo $courses['price']; ?></p>
                            <p class=" card-text"><a href="#">Enroll Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include 'includes/footer.php' ?>