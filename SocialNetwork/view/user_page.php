<?php
include "view/header.php";
include "view/navbar.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 mb-1 mt-3">
            <div class="row ">
                <div class="col-lg-3 col-md-4 col-sm-4 mt-2">
                    <img loading="lazy" style="width: 150px;" src="<?php
                                                                    if (isset($user["image"])) {
                                                                        echo $user_image;
                                                                    } else {
                                                                        if ($user["gender"] == 1) {
                                                                            echo "view/images/users/man_user.png";
                                                                        } else {
                                                                            echo "view/images/users/woman_user.jpg";
                                                                        }
                                                                    }
                                                                    ?>" class="img-fluid rounded-circle" alt="">
                </div>

                <div class="col-lg-6 ml-3 mt-2" style="padding-right: 30px;">
                    <div class="row mb-2  ">
                        <div class="col-3 px-0">
                            <p>
                                <b><?php echo $username_follow; ?></b>
                            </p>
                        </div>
                        <div class="col-7 px-0">
                            <form id="form-follow-<?php echo $user_follow; ?>">
                                <input type="hidden" name="user-follow" value="<?php echo $user_follow; ?>">
                                <button id="user-follow-<?php echo $user_follow; ?>" onclick="user_follow(<?php echo $user_follow; ?>)" class="btn text-white float-end" type="button" style="background-color: #57606f; font-size: 12px;">
                                    <?php echo $post["follow"] == 0 ? "دنبال کردن" : "لغو دنبال کردن"; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 px-0">
                            <span class="text-secondary"><small>پست ها <b><?php echo $posts_count; ?></b></small></span>
                        </div>
                        <div class="col-4 px-0">
                            <span class="text-secondary"><small>دنبال کنندگان <b id="followers-<?php echo $user_follow; ?>" ><?php echo $post["followers"]["count"]; ?></b></small></span>
                        </div>
                        <div class="col px-0">
                            <span class="text-secondary"><small>دنبال شوندگان <b><?php echo $post["followings"]["count"]; ?></b></small></span>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-6 px-0">
                            <p class="text-secondary mb-0">
                                <small><?php echo $user_bio; ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-4">

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12 text-center mt-0">
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

        <div class="row justify-content-center">
            <?php foreach ($posts_array as $post) : ?>
                <div id="post-id-<?php echo $post["id"]; ?>" class="col-lg-6 col-md-8 col-sm-12 mt-4 mx-1">
                    <div class="card shadow border-0 rounded-3">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <?php if (isset($post["media"])) : ?>

                                    <?php if ($post["media_type"] == "image") : ?>
                                        <img style="width: 600px; height: 350px;" loading="lazy" class="img-fluid" src="<?php echo $post["media"]; ?>" alt="">
                                    <?php elseif ($post["media_type"] == "video") : ?>
                                        <video width="600" controls>
                                            <source src="<?php echo $post["media"]; ?>" type="video/mp4">
                                        </video>
                                    <?php elseif ($post["media_type"] == "audio") : ?>
                                        <audio controls>
                                            <source src="<?php echo $post["media"]; ?>">
                                        </audio>
                                    <?php endif; ?>

                                <?php else : ?>
                                    <img loading="lazy" style="width: 600px; height: 350px;" src="view/images/posts/default.jpg" class="img-fluid rounded" alt="">
                                <?php endif; ?>

                                <p class="py-2 mt-2">
                                    <?php echo $post["caption"]; ?>
                                </p>
                                <p class="text-secondary" style="font-size: 14px;">
                                    <small>
                                        <?php echo time2str($post["time"]); ?>
                                    </small>
                                </p>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col" style="padding-left: 0px;">
                                    <button class="btn float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post["id"]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $post["id"]; ?>">
                                        <!-- نمایش دیدگاه کاربران -->
                                        <span id="count-comments-<?php echo $post["id"]; ?>" class="badge btn" style="color: #57606f; font-size: 13px;">
                                            <?php echo $post["num_comments"]["count"]; ?>
                                        </span>
                                        <i class="far fa-comment fa-lg" style="color: #57606f;"></i>
                                    </button>

                                    <div class="collapse" id="collapse<?php echo $post["id"]; ?>">
                                        <ul class="list-group" id="list-comments-<?php echo $post["id"]; ?>">
                                            <!-- send comment -->
                                            <li class="list-group-item list-group-item-action" aria-current="true">
                                                <div class="d justify-content-between">
                                                    <form id="form-comment-<?php echo $post["id"]; ?>" class="row align-items-center">
                                                        <div class="col">
                                                            <input name="text" type="text" style="font-size: 13px; padding-left: 0px; padding-right: 0px;  height:33px;" class="form-control" id="autoSizingInput" placeholder="دیدگاه شما ...">
                                                            <input type="hidden" name="post_id" value="<?php echo $post["id"]; ?>">
                                                        </div>
                                                        <div class="col-auto">
                                                            <button type="button" onclick="send_comment(<?php echo $post['id']; ?>, '<?php echo $username; ?>' )" class="btn btn-info btn-sm" style="font-size: 13px;">ارسال</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>

                                            <!-- display comments -->
                                            <?php foreach ($post["comments"] as $comment) : ?>
                                                <li id="comment-id-<?php echo $comment["comment_id"]; ?>" class="list-group-item list-group-item-action" aria-current="true">
                                                    <div class="row d-flex justify-content-between">
                                                        <div class="col-2 px-1 mt-1">
                                                            <span class="text-secondary" style="font-size: small;"><small><?php echo time2str($comment["time"]); ?></small></span>
                                                        </div>
                                                        <div class="col-6 px-1 mt-1">
                                                            <small class="mb-1"><?php echo $comment["text"]; ?></small>
                                                        </div>
                                                        <div class="col-3 px-1">
                                                            <div class="row">
                                                                <div class="col px-0 mt-1">
                                                                    <small class="mb-">
                                                                        <a href="user_page?user-id=<?php echo $comment["user_id"]; ?>" class="text-decoration-none">
                                                                            <b class="text-dark">:<?php echo $comment["user_name"]; ?></b>
                                                                        </a>
                                                                    </small>
                                                                </div>
                                                                <div class="col py-0 px-2">
                                                                    <form id="form-comment-id-<?php echo $comment['comment_id']; ?>">
                                                                        <input type="hidden" name="comment_id" value="<?php echo $comment["comment_id"]; ?>">
                                                                        <button onclick="delete_comment(<?php echo $comment['comment_id']; ?>)" class="btn px-0  float-end" type="button">
                                                                            <small>
                                                                                <?php echo $comment["user_id"] ==  $user_id ? "<i class='fa-trash far fa-xs' style='color: #57606f;'></i>" : ""; ?>
                                                                            </small>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Like -->
                                <div class="col-2" style="padding-left: 0px; padding-right: 0px;">
                                    <form id="form-like-<?php echo $post["id"]; ?>">
                                        <input type="hidden" name="post_id" value="<?php echo $post["id"]; ?>">
                                        <button onclick="send_like(<?php echo $post['id']; ?>)" style="padding-right: 0px;" class="btn float-end" type="button">
                                            <span id="count-like-<?php echo $post["id"]; ?>" class="badge btn" style="color: #57606f; font-size: 12px;">
                                                <?php echo $post["likes"]["count"]; ?>
                                            </span>
                                            <i id="btn-likes-<?php echo $post["id"]; ?>" class="<?php echo $post["like"] == 1 ? "fas" : "far"; ?> fa-heart fa-lg" style="color: <?php echo $post["like"] == 1 ? "#DC143C;" :  "#57606f;"; ?>"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include "view/footer.php"; ?>