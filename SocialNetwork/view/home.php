<?php
include "view/header.php";
include "view/navbar.php";
include "model/database.php";
?>


<div class="container">
    <!-- new post section -->
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header py-3">
                    افزودن پست جدید
                </div>
                <div class="card-body">
                    <form method="post" action="controller/add_post_proccess.php" id="new-post-form">
                        <div class="mb-3">
                            <label class="exampleFormControlTexterea1" class="form-label"> کپشن</label>
                            <textarea rows="3" type="text" class="form-control mt-2" id="exampleFormControlTexterea1"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">افزودن عکس/ویدئو</label>
                            <input type="file" class="form-control" id="formFile">
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

    <!-- pople post list -->
    <?php //foreach(): 
    ?>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header">
                    <div class="row mt-2">
                        <div class="col-3">
                            <img src="https://picsum.photos/200/" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-9">
                            <p>
                                <a href="#" class="text-decoration-none">
                                    <b class="text-dark">کاربــــر3</b>
                                </a>
                            </p>
                            <p class="text-secondary">
                                <small>10 ساعت پیش</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                <img class="img-fluid rounded" src="https://picsum.photos/500/500.webp" alt="">

                    <p class="py-2 mt-2">
                    .لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                </div>

                <div class="card-footer">
                <button class="btn btn float-end" type="submit" form="new-post-form">
                        <span class="badge btn" style="color: #57606f; font-size: 14px;">7</span><i class="far fa-thumbs-up" style="color: #57606f;"></i>
                    </button>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12  mt-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header">
                    <div class="row mt-2">
                        <div class="col-3">
                            <img src="https://picsum.photos/200/?blur=2" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-9">
                            <p>
                                <a href="#" class="text-decoration-none">
                                    <b class="text-dark">کاربــــر4</b>
                                </a>
                            </p>
                            <p class="text-secondary">
                                <small>8 ساعت پیش</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                <img class="img-fluid rounded" src="https://picsum.photos/500/500.jpg" alt="">

                    <p class="py-2 mt-2">
                    .لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>

                </div>

                <div class="card-footer">
                    <button class="btn btn float-end" type="submit" form="new-post-form">
                        <span class="badge btn" style="color: #57606f; font-size: 14px;">3</span><i class="far fa-thumbs-up" style="color: #57606f;"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12  mt-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header">
                    <div class="row mt-2">
                        <div class="col-3">
                            <img src="https://picsum.photos/200" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-9">
                            <p>
                                <a href="#" class="text-decoration-none">
                                    <b class="text-dark">کاربــــر1</b>
                                </a>
                            </p>
                            <p class="text-secondary">
                                <small>7 ساعت پیش</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <img class="img-fluid rounded" src="https://picsum.photos/seed/picsum/500/500" alt="">
                    <p class="py-2 mt-2">
                    .لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                </div>

                <div class="card-footer">
                    <button class="btn btn float-end" type="submit" form="new-post-form">
                        <span class="badge btn" style="color: #57606f; font-size: 14px;">4</span><i class="far fa-thumbs-up" style="color: #57606f;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12  mt-4">
            <div class="card shadow border-0 rounded-3">
                <div class="card-header">
                    <div class="row mt-2">
                        <div class="col-3">
                            <img src="https://picsum.photos/200/" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-9">
                            <p>
                                <a href="#" class="text-decoration-none">
                                    <b class="text-dark">کاربــــر2</b>
                                </a>
                            </p>
                            <p class="text-secondary">
                                <small>3 ساعت پیش</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <img class="img-fluid rounded" src="https://picsum.photos/id/870/500/500?grayscale" alt="">

                    <p class="py-2 mt-2">
                    .لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                    </p>
                </div>

                <div class="card-footer">
                    <button class="btn btn float-end" type="submit" form="new-post-form">
                        <span class="badge btn" style="color: #57606f; font-size: 14px;">10</span><i class="far fa-thumbs-up" style="color: #57606f;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
<?php //endforeach ?>

<?php include "view/footer.php"; ?>