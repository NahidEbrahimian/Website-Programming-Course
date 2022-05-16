<?php
include "view/header.php";
include "view/navbar.php";
?>

<?php if (isset($_SESSION["message"])) : ?>
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["message"]; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <?php unset($_SESSION["message"]); ?>
<?php endif; ?>

<div class="container">
    <!-- new post section -->
    <div class="row mt-5 mb-4 justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header py-3">
                    افزودن پست جدید
                </div>
                <div class="card-body">
                    <form method="post" action="add_post_proccess.php" id="new-post-form">
                        <div class="mb-3">
                            <label class="exampleFormControlTexterea1" class="form-label"> کپشن</label>
                            <textarea name="text" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">افزودن عکس/ویدئو</label>
                            <input name="media" type="file" class="form-control" id="formFile">
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3  d-grid gap-2">
                    <button class="btn btn-primary text-white float-end" type="submit" form="new-post-form">
                        انتشار پست
                    </button>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-4">

    <div class="row">
        <?php foreach ($posts as $post) : ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header">
                        <div class="row mt-2">
                            <div class="col-3">
                                <?php
                                //$user_id = $post["user_id"];
                                //$user = $db->query("SELECT * FROM users WHERE id = $user_id")->fetch_assoc();
                                //$user_img = $user["image"];
                                //$user_name = $user["user_name"];
                                ?>
                                <?php if (isset($post["image"])) : ?>
                                    <img src="<?php //echo $user["image"]; 
                                                ?>" class="img-fluid rounded-circle" alt="">
                                    <img src="<?php echo $post["image"]; ?>" class="img-fluid rounded-circle" alt="">
                                <?php else : ?>
                                    <img style="width: 100px;" src="view/images/users/default.jpg" class="img-fluid rounded-circle" alt="">
                                <?php endif; ?>
                                <!-- <img src="<?php //echo $user_img; 
                                                ?>" class="img-fluid rounded-circle" alt=""> -->
                            </div>
                            <div class="col-9">
                                <p>
                                    <a href="#" class="text-decoration-none">
                                        <b class="text-dark">
                                            <?php //echo $user_name; 
                                            ?>
                                            <?php echo $post["user_name"]; ?>

                                        </b>
                                    </a>
                                </p>
                                <p class="text-secondary">
                                    <small>
                                        <?php echo $post["time"]; ?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php if (isset($post["media"])) : ?>
                            <img class="img-fluid rounded" src="<?php echo $post["media"]; ?>" alt="">
                        <?php else : ?>
                            <img style="width: 500px;" src="view/images/posts/default.jpg" class="img-fluid rounded" alt="">
                        <?php endif; ?>
                        <!-- <img class="img-fluid rounded" src="<?php //echo $post["media"]; 
                                                                    ?>" alt=""> -->
                        <p class="mt-3">
                            <?php echo $post["caption"]; ?>
                        </p>
                    </div>

                    <div class="card-footer">
                        <div class="row">

                            <!-- new comment -->
                            <div class="col-8">
                                <form class="row gy-2 gx-3 align-items-center">
                                    <div class="col-8">
                                        <input type="text" class="form-control col-xs-2" id="autoSizingInput" placeholder="دیدگاه شما">
                                    </div>

                                    <div class="col-4">
                                        <button type="submit" class="btn btn-info">ارسال</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Like -->
                            <div class="col-4">
                                <button class="btn btn float-end" type="submit" form="new-post-form">
                                    <span class="badge btn" style="color: #57606f; font-size: 14px;">7</span><i class="far fa-thumbs-up" style="color: #57606f;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="row-2">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post["id"]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $post["id"]; ?>">
                                <!-- نمایش دیدگاه کاربران -->
                                <span class="badge btn" style="color: #57606f; font-size: 14px;">7</span><i class="far fa-comment" style="color: #57606f;"></i>
                            </button>

                            <div class="collapse" id="collapse<?php echo $post["id"]; ?>">
                                <div class="list-group">
                                    <?php foreach ($comments as $comment) : ?>
                                        <?php if ($post["id"] == $comment["post_id"]) : ?>
                                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1"><?php echo $comment["text"]; ?></h5>
                                                    <small> <?php echo $comment["user_name"]; ?></small>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                <div class="d-flex w-100 justify-content-between">
                                                <form class="row gy-2 gx-3 align-items-center">
                                    <div class="col-8">
                                        <input type="text" class="form-control col-xs-2" id="autoSizingInput" placeholder="دیدگاه شما">
                                    </div>

                                    <div class="col-4">
                                        <button type="submit" class="btn btn-info">ارسال</button>
                                    </div>
                                </form>
                                                </div>
                                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "view/footer.php"; ?>