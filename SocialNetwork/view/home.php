<?php

include "view/header.php";
include "view/navbar.php";

?>

<?php if (isset($_SESSION["message"])) : ?>
    <div class="row justify-content-center mt-3">
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
        <div class="col-lg-6 col-md-8 col-sm-12 mb-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header py-3">
                    افزودن پست جدید
                </div>
                <div class="card-body">
                    <form method="post" action="add_post_proccess.php" id="new-post-form" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="exampleFormControlTexterea1" class="form-label"> کپشن</label>
                            <textarea name="text" rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">افزودن عکس/ویدئو</label>
                            <input type="file" name="media" class="form-control" aria-label="Last name">
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
            <div class="col-lg-6 col-md-8 col-sm-12 mt-4 mx-1">
                <div class="card shadow border-0 rounded-3">
                    <div class="card-header">
                        <div class="row mt-2">
                            <div class="col-2" style="padding-left: 0px;">

                                <img loading="lazy" style="width: 50px;" src="<?php echo isset($post["image"]) ? $post["image"] : ($post["gender"] == 1 ? "view/images/users/man_user.png" : "view/images/users/woman_user.jpg");  ?>" class="img-fluid rounded-circle" alt="">

                            </div>
                            <div class="col-10 mt-2" style="padding-right: 20px;">
                                <p>
                                    <a href="user_page?user-id=<?php echo $post["user_id"]; ?>" class="text-decoration-none">
                                        <b style="font-size: 13px;" class="text-dark">
                                            <?php echo $post["user_name"]; ?>
                                        </b>
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>

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
                                <img loading="lazy" style="width: 500px; height: 350px;" src="view/images/posts/default.jpg" class="img-fluid rounded" alt="">
                            <?php endif; ?>

                            <p class="mt-3">
                                <?php echo $post["caption"]; ?>
                            </p>
                            <p class="text-secondary" style="font-size: small;">
                                <small>
                                    <?php echo time2str($post["time"]); ?>
                                </small>
                            </p>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col" style="padding-left: 0px;">
                                <button class="btn float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post["post_id"]; ?>" aria-expanded="false" aria-controls="collapse<?php echo $post["post_id"]; ?>">
                                    <!-- نمایش دیدگاه کاربران -->
                                    <span id="count-comments-<?php echo $post["post_id"]; ?>" class="badge btn" style="color: #57606f; font-size: 13px;">
                                        <?php echo $post["num_comments"]["count"]; ?>
                                    </span>
                                    <i class="far fa-comment fa-lg" style="color: #57606f;"></i>
                                </button>

                                <div class="collapse" id="collapse<?php echo $post["post_id"]; ?>">
                                    <!-- send comment -->
                                    <ul class="list-group" id="list-comments-<?php echo $post["post_id"]; ?>">
                                        <li class="list-group-item list-group-item-action" aria-current="true">
                                            <div class="d justify-content-between">
                                                <form id="form-comment-<?php echo $post["post_id"]; ?>" class="row align-items-center">
                                                    <div class="col">
                                                        <input name="text" type="text" style="font-size: 13px; padding-left: 0px; padding-right: 0px;  height:33px;" class="form-control" id="autoSizingInput" placeholder="دیدگاه شما ...">
                                                        <input type="hidden" name="post_id" value="<?php echo $post["post_id"]; ?>">
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="button" onclick="send_comment(<?php echo $post['post_id']; ?>, '<?php echo $user_name; ?>' )" class="btn btn-info btn-sm" style="font-size: 13px;">ارسال</button>
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
                                <form id="form-like-<?php echo $post["post_id"]; ?>">
                                    <input type="hidden" name="post_id" value="<?php echo $post["post_id"]; ?>">
                                    <button onclick="send_like(<?php echo $post['post_id']; ?>)" style="padding-right: 0px;" class="btn float-end" type="button">
                                        <span id="count-like-<?php echo $post["post_id"]; ?>" class="badge btn" style="color: #57606f; font-size: 12px;">
                                            <?php echo $post["likes"]["count"]; ?>
                                        </span>
                                        <i id="btn-likes-<?php echo $post["post_id"]; ?>" class="<?php echo $post["like"] == 1 ? "fas" : "far"; ?> fa-heart fa-lg" style="color: <?php echo $post["like"]==1 ? "#DC143C;" :  "#57606f;"; ?>"></i>
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

<?php include "view/footer.php"; ?>