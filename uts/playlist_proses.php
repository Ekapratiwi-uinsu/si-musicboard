<?php

require_once "inc/config.php";

$playlist = new App\Playlist();

if (isset($_POST['b_input'])) {
    $playlist->input();
    header("location:index.php?page=playlist_tampil");
}

if (isset($_POST['b_edit'])) {
    $playlist>update();
    header("location:index.php?page=playlist_tampil");
}