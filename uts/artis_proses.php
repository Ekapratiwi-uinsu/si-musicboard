<?php

require_once "inc/config.php";

$artis = new App\Artis();

if (isset($_POST['b_input'])) {
    $artis->input();
    header("location:index.php?page=artis_tampil");
}

if (isset($_POST['b_edit'])) {
    $artis->update();
    header("location:index.php?page=artis_tampil");
}