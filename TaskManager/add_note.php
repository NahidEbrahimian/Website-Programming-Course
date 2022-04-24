<?php
include "header.php";
include "database.php";

// $notes = $db->query("SELECT * FROM tasks");
$colors = $db->query("SELECT * FROM colors");
?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 rounded">
            <div class="card">
                <form action="add_not_proccess.php" method="POST">
                    <div class="card-body">
                        <div><input name="title" type="text" placeholder="عنوان" class="form-control" name="title"></div>

                        <div class="mt-3">
                            <textarea name="text" type="text" placeholder=" توضیحات..." name="text" class="form-control">
                            </textarea>
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
                                        <input name="time" type="time" id="start"  value="<?php echo date('H:i'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class=" my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-end">
                                        <select name="color" id="select-tag-color" onchange="display_color(this)" style="background: Aquamarine; width: 50px; height: 30px;">
                                        <?php foreach ($colors as $color): ?>
                                            <option value='<?php echo $color['color']; ?>' style="background: <?php echo $color['color']; ?>;"></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-end">
                                        <button type="submit" class="btn btn-primary btn-sm">ذخیره</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
