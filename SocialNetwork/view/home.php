<?php
include "view/header.php";
include "view/navbar.php";

// $current_time = new DateTime();
// echo $current_time->format('Y-m-d H:i:s'); 

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
    <div class="row mt-4 mb-4 justify-content-center">
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
                    <button class="btn btn-info text-white float-end" type="submit" form="new-post-form">
                        انتشار پست
                    </button>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-4">

    <div class="row justify-content-center">
        <?php foreach ($posts_array as $post) : ?>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mx-1">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header">
                        <div class="row mt-2">
                            <div class="col-lg-2 col-md-3 col-sm-3">
                            <img loading="lazy" style="width: 100px;" src="<?php 
                                if (isset($post["image"]))
                                {
                                    echo $post["image"];
                                }
                                else
                                {
                                    if($post["gender"] == 1)
                                    {
                                        echo "view/images/users/man_user.png";
                                    }
                                    else
                                    {
                                        echo "view/images/users/woman_user.jpg";
                                    }
                                }
                            ?>" class="img-fluid rounded-circle" alt="">

                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-9">
                                <p>
                                    <a href="#" class="text-decoration-none">
                                        <b style="font-size: 13px;" class="text-dark">
                                            <?php echo $post["user_name"]; ?>
                                        </b>
                                    </a>
                                </p>
                                <p class="text-secondary">
                                    <small dir="ltr">
                                        <?php echo time2str($post["time"]); ?>
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <?php if (isset($post["media"])) : ?>
                                <img loading="lazy" class="img-fluid" src="<?php echo $post["media"]; ?>" alt="">
                            <?php else : ?>
                                <img loading="lazy" style="width: 500px;" src="view/images/posts/default.jpg" class="img-fluid rounded" alt="">
                            <?php endif; ?>

                            <p class="mt-3">
                                <?php echo $post["caption"]; ?>
                            </p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-10" style="padding-left: 0px;">
                                <!-- <div class="col"> -->
                                    <button class="btn float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post["post_id"]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $post["post_id"]; ?>">
                                        <!-- نمایش دیدگاه کاربران -->
                                        <span class="badge btn" style="color: #57606f; font-size: 13px;"><?php echo $post["num_comments"]["count"]; ?></span><i class="far fa-comment fa-sm" style="color: #57606f;"></i>
                                    </button>
                                <!-- </div> -->

                                <!-- <div class="col"> -->
                                    <div class="collapse" id="collapse<?php echo $post["post_id"]; ?>">
                                        <div class="list-group">

                                            <?php foreach ($post["comments"] as $comment) : ?>
                                                <?php if ($post["post_id"] == $comment["post_id"]) : ?>
                                                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                        <div class="row d-flex justify-content-between">
                                                            <div class="col-3 px-1">
                                                                <small><?php echo time2str($comment["time"]); ?></small>
                                                            </div>
                                                            <div class="col-6 px-1">
                                                                <small class="mb-1"><?php echo $comment["text"]; ?></small>
                                                            </div>
                                                            <div class="col-3 px-1">
                                                                <small class="mb-1"><b>:<?php echo $comment["user_name"]; ?></b></small>
                                                            </div>                                                           
                                                        </div>
                                                    </a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                                <div class="d justify-content-between">
                                                    <form class="row align-items-center">
                                                        <div class="col">
                                                            <input type="text" style="font-size: 13px; padding-left: 0px; padding-right: 0px;  height:33px;" class="form-control" id="autoSizingInput" placeholder="دیدگاه شما">
                                                        </div>

                                                        <div class="col-auto">
                                                            <button type="submit" class="btn btn-info btn-sm" style="font-size: 13px;">ارسال</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>

                            <!-- Like -->
                            <div class="col-2" style="padding-left: 0px; padding-right: 0px;">
                                <button style="padding-right: 0px;" class="btn float-end" type="submit">
                                    <span class="badge btn" style="color: #57606f; font-size: 12px;"><?php echo $post["likes"]["count"]; ?></span><i class="far fa-thumbs-up fa-sm" style="color: #57606f;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include "view/footer.php"; ?>