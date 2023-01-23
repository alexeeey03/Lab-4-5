<?php
    session_start();
    require_once 'config.php';       

    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $path = 'items/' . time() . $_FILES['file']['name'];
    if (!move_uploaded_file($_FILES['file']['tmp_name'], '../' . $path)){
        $_SESSION['error_of_creation']='Файл не загрузился';
        header('Location: ../create.php');
    }
    if (mysqli_query($connect, "INSERT INTO `goods` ( `name`, `description`, `size`,`price`, `file`) VALUES ('$name', '$description', '$size', '$price','$path')")){
        $_SESSION['added']='Товар добавлен';
        header('Location: ../create.php');
    } else{
        $_SESSION['added']='Товар не был добавлен';
        header('Location: ../create.php');
    }
?>