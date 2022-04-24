<?php
include "header.php";
include "database.php";

$notes = $db->query("SELECT * FROM tasks");
$colors = $db->query("SELECT * FROM colors");

?>

<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-lg-8 col-md-12 col-sm-12 rounded">
            <div class="card">
                <div class="card-header">
                    افزودن یادداشت
                </div>
                <form action="add_not_proccess.php" method="POST">
                    <div class="card-body">
                        <div><input name="title" type="text" placeholder="عنوان" class="form-control" name="title"></div>
                        <div class="mt-3 form-group">
                            <textarea id="exampleFormControlTextarea1" name="text" placeholder=" توضیحات..." rows="4" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                        <input name="date" type="date" id="start" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                    <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                        <input name="time" type="time" id="start" value="<?php echo date('H:i'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class=" my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                        <select name="color" id="select-tag-color" onchange="display_color(this)" style="background: Aquamarine; width: 50px; height: 30px;">
                                            <?php foreach ($colors as $color) : ?>
                                                <option value='<?php echo $color['color']; ?>' style="background: <?php echo $color['color']; ?>;"></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                        <button style="background-color: #70a1ff" type="submit" class="btn btn-sm">ذخیره</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <?php foreach ($notes as $note) : ?>
            <div class="col-lg-3 col-md-4 col-sm-12 rounded mt-3">
                <div class="card mt-2" style="background-color: <?php echo $note["color"]; ?>">
                    <div class="card-header">
                        <h5><?php echo $note["title"]; ?></h5>
                    </div>

                    <div class="card-body">
                        <p class="card-text"><?php echo $note["text"]; ?></p>
                        <div class="mt-4">
                            <p>
                                <i class="far fa-calendar-alt" style="color: #57606f;"></i>
                                <span><?php echo date("Y-m-d", strtotime($note["date_time"])); ?></span>
                            </p>
                            <p>
                                <i class="far fa-alarm-clock" style="color: #57606f;"></i>
                                <span><?php echo date("H:i", strtotime($note["date_time"])); ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col d-flex flex-column justify-content-center align-items-center">
                                        <a href="edit_note.php?note-id=<?php echo $note["id"]; ?>" class="text-decoration-none" style="color: #57606f;"><i class="fa fa-edit"></i></a>
                                    </div>
                                    <div class="col d-flex flex-column justify-content-center align-items-center">
                                        <a href="delete_note.php?note-id=<?php echo $note["id"]; ?>" class="text-decoration-none" style="color: #57606f;"><i class="fas fa-trash fas-2xs"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault" style="font-size:13px;">
                                        <span>انجام شده</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include "footer.php"; ?>

<script>
    function display_color(selected_color)
    {
        var select_tag = document.getElementById("select-tag-color");
        color = selected_color.value;
        select_tag.style.background = selected_color.value;
    }
</script>