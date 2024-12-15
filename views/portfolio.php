<?php include "includes/header.php"; ?>

<section class="py-5 bg-info-subtle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-4">My Project</h1>
            </div>

            <?php foreach ($project as $project) { ?>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $project['project_image'] ?>" alt="" />
                    <div class="card-body">
                        <h1><?php echo $project['project_title'] ?></h1>
                        <p>
                            <?php echo $project['project_description'] ?>
                        </p>
                        <a href="web.php?page=<?php echo $project['project_page'] ?>" class="btn btn-success">See Project</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
