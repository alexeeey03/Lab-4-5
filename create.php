<?php
    session_start();
    require_once 'include/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Добавление</title>
        <link href="css/create.css" rel="stylesheet"> 
    </head>
    <body>
        <div>
            <div >
                <form action="include/creating.php" method="post" enctype="multipart/form-data">
                
                    <label>Название</label>
                    <input type="text" placeholder="Введите название" name="name">
                    <label>Цена</label>
                    <input type="text" placeholder="Введите цену" name="price">
                    <label>Размер</label>
                    <input type="text" placeholder="Введите размер" name="size">
                    <label>Описание</label>
                    <input type="text" placeholder="Введите описание" name="description">
                    <label>Файл</label>
                    <input type="file" placeholder="Загрузить файл" name="file">
                    <button type="submit">Добавить товары</button>
                    <a href="index.php"> Главная страница</a>
                    <a href="list.php"> Список товаров</a>
                    <?php
                        if (isset($_SESSION['error_of_creation'])) {
                            echo '<p class="mes_green"> ' . $_SESSION['error_of_creation'] . ' </p>';
                            unset($_SESSION['error_of_creation']);
                        }
                        if (isset($_SESSION['added'])) {
                            echo '<p class="message"> ' . $_SESSION['added'] . ' </p>';
                            unset($_SESSION['added']);
                        }
                    ?>   
                </form>
                
            </div>
        </div>
    </body>
</html>