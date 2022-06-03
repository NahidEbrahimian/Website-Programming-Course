<?php

include "model/database.php";

$text = $_POST["text"];
$user_id = $_SESSION["user_id"];
$flag = 1;

if (!isset($_FILES["media"]["name"]))
{
    $_SESSION["message"] = ".mp3 :فایل صوتی .mp4 :ویدئو .jpg:لطفا فایل با فرمت معتبر وارد کنید. تصویر";
    $_SESSION["message_type"] = "error";
    $flag = 0;
}
if($text == "")
{
    $_SESSION["message"] = "کپشن نمی تواند خالی باشد";
    $_SESSION["message_type"] = "error";
    $flag = 0;
}
if($flag == 1)
{
    $media = "view/images/posts/" . $_FILES["media"]["name"];
    move_uploaded_file($_FILES["media"]["tmp_name"] ,$media);

    $file_type = $_FILES['media']['type'];
    echo $file_type;

    $video_formats = array('video/mpg','video/mp4');
    $img_formats = array('image/jpg', 'image/gif', 'image/png');
    $audio_formats = array('audio/mp3', 'audio/mpeg');

    if (in_array($file_type, $video_formats))
    {
        $media_type = 'video';
        $flag = 1;
    } 
    elseif (in_array($file_type, $img_formats))
    {
        $media_type = 'image';
        $flag = 1;
    }
    elseif (in_array($file_type, $audio_formats))
    {
        $media_type = 'audio';
        $flag = 1;
    }
    else
    {
        $_SESSION["message"] = ".mp3 :فایل صوتی .mp4 :ویدئو .jpg:لطفا فایل با فرمت معتبر وارد کنید. تصویر";
        $_SESSION["message_type"] = "error";
    }
    if($flag == 1)
    {
        $db->query("INSERT INTO posts (caption, user_id, media, media_type) VALUES('$text', '$user_id', '$media', '$media_type')");
    }
}

header("Location: home.php");

?>