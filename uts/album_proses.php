<?php

require_once "inc/config.php";

$album = new App\Album();

if (isset($_POST['b_input'])) {
    $album->input();
    header("location:index.php?page=album_tampil");
}

if (isset($_POST['b_edit'])) {
    $album->update();
    header("location:index.php?page=album_tampil");
}