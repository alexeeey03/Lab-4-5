<?php
    session_start();
    require_once 'config.php';          
    $id = $_POST['id'];
    mysqli_query($connect, "DELETE FROM `goods` WHERE `id`='$id'");
    header('Location: ../create.php');
?>