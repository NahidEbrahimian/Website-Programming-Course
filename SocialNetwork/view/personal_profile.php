<?php
include "view/header.php";
include "view/navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg col-md-6 col-sm-12">
            <div class="col-lg-9 col-md-12 col-sm-12 mb-1 mt-3">
                <div class="row ">
                    <div class="col-lg-3 col-md-4 col-sm-4 mt-2">
                        <?php if (isset($user["image"])) : ?>
                            <img src="<?php echo $user["image"]; ?>" class="img-fluid rounded-circle" alt="">
                        <?php else : ?>
                            <img src="view/images/users/default.jpg" class="img-fluid rounded-circle" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 ml-3 mt-2" style="padding-right: 30px;">
                        <div class="row mb-2  ">
                            <div class="col-3 px-0">
                                <p>
                                    <b><?php echo $username; ?></b>
                                </p>
                            </div>
                            <div class="col-7 px-0">
                                <button class="btn text-white float-end" type="submit" form="new-post-form" style="background-color: #57606f; font-size: 12px;">
                                    ویرایش پروفایل
                                </button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-3 px-0">
                                <span class="text-secondary"><small>پست ها <b><?php echo $posts_count; ?></b></small></span>
                            </div>
                            <div class="col-4 px-0">
                                <span class="text-secondary"><small>دنبال کنندگان <b>10</b></small></span>
                            </div>
                            <div class="col px-0">
                                <span class="text-secondary"><small>دنبال شوندگان <b>10</b></small></span>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6 px-0">
                                <p class="text-secondary mb-0">
                                    <small><?php echo $user["bio"]; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mt-4">


            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 col-sm-12 text-center mt-0">
                    <div class="row">
                        <div class="col">
                            <a class="text-secondary text-decoration-none" href="home.php"><small><i class="fas fa-home mx-1"></i>خانه</small></a>
                        </div>
                        <div class="col">
                            <a class="text-secondary text-decoration-none" href="home.php"><small><i class="fas fa-plus mx-1"></i> افزودن پست</small></a>
                        </div>
                        <div class="col">
                            <a class="text-secondary text-decoration-none" href="#"><small><i class="fas fa-id-badge mx-1"></i>برچسب ها</small></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($posts as $post) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                        <div class="card shadow border-0 rounded-3">
                            <div class="card-body">
                                <?php if (isset($post["media"])) : ?>
                                    <img class="img-fluid rounded" src="<?php echo $post["media"]; ?>" alt="">
                                <?php else : ?>
                                    <img style="width: 500px;" src="view/images/posts/default.jpg" class="img-fluid rounded" alt="">
                                <?php endif; ?>
                                <!-- <img class="img-fluid rounded" src="<?php //echo $post["media"]; ?>" alt=""> -->
                                <p class="py-2 mt-2">
                                    <?php echo $post["caption"]; ?>
                                </p>
                                <p class="text-secondary mt-2 float-end">
                                    <small>
                                        <?php echo $post["time"]; ?>
                                    </small>
                                </p>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn float-end" type="submit" form="new-post-form">
                                    <span class="badge btn" style="color: #57606f; font-size: 14px;">7</span><i class="far fa-thumbs-up" style="color: #57606f;"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php include "view/footer.php"; ?>