<?php
require "../connection.php";
require  "../museum.php";

if(isset($_POST['muzejID'])){
    
    $status = Muzej::deleteById($_POST['muzejID'], $conn);
    if($status){
        echo 'Success';
    }else{
        echo 'Failed';
    }
}
?>