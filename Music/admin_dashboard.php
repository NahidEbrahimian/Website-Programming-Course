<?php
include "header.php";
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
?>

<?php if($_SESSION["login_status"] != null && $_SESSION["login_status"] == true): ?>
    <div class="container">
        <h2 class="text-light mb-5">
            داشبورد
        </h2>
        <!-- <hr class="bg-light"> -->
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php include "admin_side.php"; ?>
            </div>

            <div class="col-9">

            </div>
        </div>
    </div>

<?php 
    else:
        header("Location: index.php");
    endif;
?> 
<?php include "footer.php"; ?>