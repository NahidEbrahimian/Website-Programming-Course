<?php
include "header.php";
include "database.php";

$note_id = $_GET["note-id"];
$note = $db->query("SELECT * FROM tasks WHERE id = $note_id")->fetch_assoc();
$colors = $db->query("SELECT * FROM colors");

?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-8 col-md-12 col-sm-12 rounded">
            <form method="post" action="edit_note_proccess.php">
                <div class="card">
                    <form action="add_not_proccess.php" method="POST">
                        <div class="card-body">
                            <div><input type="text" placeholder="عنوان" class="form-control" name="title" value="<?php echo $note["title"]; ?>"></div>

                            <div class="mt-3">
                                <textarea rows="4" id="exampleFormControlTextarea1" placeholder=" توضیحات..." name="text" class="form-control px-0"><?php echo $note["text"]; ?></textarea>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                            <input type="date" id="start" name="date" value=<?php echo date("Y-m-d", strtotime($note["date_time"])); ?>>
                                        </div>
                                        <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                            <input type="time" id="start" name="time" value=<?php echo date("H:i", strtotime($note["date_time"])); ?>>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                            <select name="color" id="select-tag-color" onchange="display_color(this)" style="background: <?php echo $note["color"]; ?>; width: 50px; height: 30px;">
                                            <option selected style= "color: <?php echo $note["color"]; ?>;"><span style="color: <?php echo $note["color"]; ?>;"><?php echo $note["color"]; ?></span></option>
                                                <?php foreach ($colors as $color) : ?>
                                                    <option value='<?php echo $color['color']; ?>' style="background: <?php echo $color['color']; ?>;"></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="my-2 col col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                                            <button type="submit" class="btn btn-primary btn-sm">ذخیره</button>
                                        </div>
                                        <input type="hidden" value="<?php echo $note_id; ?>" name="id">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>

<script>
    function display_color(selected_color) {
        var select_tag = document.getElementById("select-tag-color");
        color = selected_color.value;
        select_tag.style.background = selected_color.value;
    }
</script>