<?php
    session_start();
    require_once 'include/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/head.css">
        <link rel="stylesheet" href="./css/whole.css">
        <link rel="stylesheet" href="./css/block2.css">
        <link rel="stylesheet" href="./css/popular.css">
        <link rel="stylesheet" href="./css/skidki.css">
        <link rel="stylesheet" href="./css/reviews.css">
        <link rel="stylesheet" href="./css/footer.css">
        <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="head">

            <div>
              <div class="menu">
                <ul>
                    <li class="links"><a class="text" href="#">Каталог</a></li>
                    <li class="links"><a class="text" href="#">Доставка и оплата</a></li>
                    <li class="links"><a class="text" href="#">Отзывы</a></li>
                    <li class="links"><a class="text" href="#">Спецпредложения</a></li>
                    <li class="links"><a class="text" href="#">Контакты</a></li>
                    <li class="links"><a class="text" href="create.php">Редактирование</a></li>
                  <li class="links"><a class="text" href="#">Корзина</a></li>
                </ul>
              </div>
              <div class="textflowers"> 
                <div class="item1">
                    <div><h1>Авторские букеты <i>в Петербурге</i></h1></div>
                    <div><p>Оригинальные свежие букеты с доставкой по всему городу</p></div>
                    <div><a href="#">Смотреть каталог</a></div>
                </div>
                <div class="item2"><img src="./pic/taisiia-shestopal-JZDyFwGAEqY-unsplash 1.png"></div>
              </div>
        </header>
        <main>
            <div class="secondblock">
                <div class="feature">
                    <div class="icon"><img src="./pic/доставка.png"></div>
                    <div>
                        <h5>Быстрая доставка</h5>
                        <p>Можем собрать букет и передать его в доставку всего за час.</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="icon"><img src="./pic/цветы.png"></div>
                    <div>
                        <h5>Всегда свежие цветы</h5>
                        <p>Тщательно следим за состоянием цветов, а опытные флористы отбирают для букетов каждый цветок.</p>
                    </div>
                </div>
                <div class="feature">
                    <div class="icon"><img src="./pic/camera.png"></div>
                    <div>
                        <h5>Отправляем фото цветов</h5>
                        <p>Перед доставкой сделаем фотографию букета и отправим вам.</p>
                    </div>
                </div>
            </div>
            <div class="pop">
                <div class="headerpop">
                    <h1>Популярные букеты</h1>
                </div>
                
                    <div class="textflowerspop" style="overflow-x:auto;">
                        
                    <?php 
                        $products = mysqli_query($connect, "SELECT * FROM `goods` ORDER BY id DESC LIMIT 3");
                        $products = mysqli_fetch_all($products);
                        foreach ($products as $product){?> 
                        <div class="card">
                            <div class="description">
                            
                                <h2><?=$product[1] ?></h2>
                                <p><?=$product[2] ?></p>
                                <p> <?=$product[3] ?></p>
                                <p><b><?=$product[4] ?> руб.</b></p>
                                <div class="button"><a href="#">Заказать</a></div>
                            </div>
                            <div class="flowers"><img src="<?=$product[5] ?>"></div>
                        </div>
                            <?php 
                        }?>   
                    </div>
                        
                    
                </div>
            </div>
            <div class="sale">
                <div class="saletext">
                    <h2>Скидка 10%
                        на первый заказ</h2>
                    <p>Если заказываете у нас букет впервые — при оформлении заказа введите промокод «Botanika2021» и получите скидку 10%.</p>
                </div>
                <div class="salephoto">
                    <img src="./pic/florist-makes-beautiful-bouquet-studio 1.png">
                </div>
            </div>
            <div class="reviews">
                <div>
                    <h2>Отзывы</h2>
                </div>
                <div class="rowofreviews">
                    <div class="eachreview1">
                        <div><p>Всё очень понравилось! Быстрое оформление заказа, выбор удобного времени доставки. Всем большое спасибо!</p></div>
                        <div><p><b>Марина</b></p></div>
                    </div>
                    <div class="eachreview2">
                        <div><p>Внимательные флористы, вежливые. Магазин находится прям рядом с метро. Букет очень понравился, буду ещё заказывать!</p></div>
                        <div><p><b>Татьяна</b></p></div>
                    </div>
                    <div class="eachreview3">
                        <div><p>Выбор букетов на любой вкус
                            и цену. Бывают хорошие скидки,
                            а флористы всегда помогут и точно соберут красивый букет!</p></div>
                        <div><p><b>Ольга</b></p></div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            
                <ul>
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Спецпредложения</a></li>
                    <li><a href="#">Контакты</a></li>
                
                </ul>
            
            
        </footer>
    </body>
</html>