<?php

require "../connection.php";
require "../museum.php";

if (isset($_POST['muzejID']) && isset($_POST['nazivMuzeja']) && isset($_POST['grad'])
    && isset($_POST['godinaOsnivanja'])) {

    $status = Muzej::update($_POST['muzejID'], $_POST['nazivMuzeja'], $_POST['grad'], $_POST['godinaOsnivanja'], $conn);
    if ($status) {
        echo 'Success';
    } else {
        echo $status;
        echo 'Failed';
    }
}
?>