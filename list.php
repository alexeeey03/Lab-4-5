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
    <div class="list"><a  href="create.php"> Добавить товары</a></div>
                <table>
                    <tr>       
                        <td>Название</td>
                        <td>Описание</td>
                        <td>Размер</td>
                        <td>Цена</td>
                        <td>Картинка</td>
                        <td>Редактирование</td>
                        <td>Удаление</td>
                    </tr>  
                <?php 
                $items = mysqli_query($connect, "SELECT * FROM `goods`");
                $items = mysqli_fetch_all($items);
                foreach ($items as $item){
                    echo '
                    <tr>
                        <td>' . $item[1] . '</td>
                        <td>' . $item[2] . '</td>
                        <td>' . $item[3] . '</td>
                        <td>' . $item[4] . '</td>
                        <td><img src="' . $item[5] . '" width=30%></td>
                        <td><a href="update.php?id=' . $item[0] .'">редактировать</a></td>
                        <td><a href="delete.php?id=' . $item[0] .'">удалить</a></td>
                    </tr>';
                }
                ?>
                </table>
                

    </body>
</html>
