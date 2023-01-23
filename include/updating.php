<?php
  
    session_start();
    require_once 'config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    if (($_FILES['file']['name'])===''){
        mysqli_query($connect, "UPDATE `goods` SET `name`='$name',`description`='$description', `size`='$size', `price`='$price' WHERE `id`= '$id'");
    } else{       
        $path = 'items/' . time() . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path);
        mysqli_query($connect, "UPDATE `goods` SET `name`='$name',`description`='$description', `size`='$size', `price`='$price',`file`='$path' WHERE `id`= '$id'");
    }
    header('Location: ../create.php');
          
    
?>