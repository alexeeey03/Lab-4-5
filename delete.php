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
        <title>Удаление</title>
        <link href="css/delete.css" rel="stylesheet">
    </head>
    <body>
        <form class="delform" action="include/deleting.php" method="post">
            <input name="id" type="hidden" value=<?=$id?>>
            <button class="del" type="submit">Удалить товар</button>
        </form>
        
    </body>
</html>