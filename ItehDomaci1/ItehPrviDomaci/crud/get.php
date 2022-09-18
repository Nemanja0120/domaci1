<?php

require "../connection.php";
require "../museum.php";

if(isset($_POST['muzejID'])) {
    $myArray = Muzej::getById($_POST['muzejID'], $conn);
    echo json_encode($myArray);
}
?>