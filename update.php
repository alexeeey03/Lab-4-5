<?php
    session_start();
    require_once 'include/config.php';
    $id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id`= '$id'");
    $product = mysqli_fetch_assoc($product);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Обновление</title>
        
        <link href="css/create.css" rel="stylesheet">
    </head>
    <body>
        <form action="include/updating.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value=<?=$id?>>
            <label> Название</label>
            <input type="text" placeholder="Введите название" name="name" value=<?= $product['name']?>>
            <label>Цена</label>
            <input type="text" placeholder="Введите цену" name="price" value=<?= $product['price']?>>
            <label>Размер</label>
            <input type="text" placeholder="Введите размер" name="size" value=<?= $product['size']?>>
            <label>Описание</label>
            <input type="text" placeholder="Введите описание" name="description" value=<?= $product['description']?>>
            <label>Фотография</label>
            <input type="file" placeholder="Загрузите файл" name="file" value=<?= $product['file']?>>
            <button type="submit">Обновить товар</button>
            
            
        </form>
        
    </body>
</html>