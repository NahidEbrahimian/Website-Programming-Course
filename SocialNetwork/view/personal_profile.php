<?php
include "view/header.php";
include "view/navbar.php";
include "model/database.php";
?>


<div class="container">
    <div class="row mt-4 justify-content-center">
        <div class="col-lg col-md-6 col-sm-12">
            <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="row ">
                    <div class="col-3">
                        <img src="https://picsum.photos/200" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="col-lg-9 ml-3 mt-4">
                        <div class="row mb-2">
                            <div class="col-3">
                                <p class="mx-3">
                                    <b>کاربـــــر1</b>
                                </p>
                            </div>
                            <div class="col-5">
                                <button class="btn text-white float-end" type="submit" form="new-post-form" style="background-color: #57606f; font-size: 12px;">
                                    ویرایش پروفایل
                                </button>
                            </div>
                        </div>

                        <div class="mb-2">
                            <p class="text-secondary">
                                <span class="mx-3"><small>پست ها 5</small></span>
                                <span class="mx-3"><small>دنبال کنندگان 10</small></span>
                                <span class="mx-3"><small>دنبال شونده گان 10</small></span>
                            </p>
                        </div>
                        <p class="text-secondary mx-3">
                            <small>بیوگرافی</small>
                        </p>

                    </div>
                </div>

            </div>

            <hr>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <div class="card shadow border-0 rounded-3">
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

                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <div class="card shadow border-0 rounded-3">
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

                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <div class="card shadow border-0 rounded-3">

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
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <div class="card shadow border-0 rounded-3">
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
            </div>
        </div>
    </div>

    <?php //foreach(): ?>

</div>


<?php include "view/footer.php"; ?>