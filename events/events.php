<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="events.css">
    <link rel="stylesheet" href="events-text-color.css">
    <title>Сайт Максима Хадеева</title>
</head>
<body>
    <header>
        <div class="head"><b>Сайт Максима Хадеева</b></div>

        <div class="head-navigation">
            <a href="../index.php" class="btn">Главная</a>
            <a href="../my-hobbies/my-hobbies.php" class="btn">Мои увлечения</a>
            <a href="#" class="btn">События</a>
            <a href="../articles-main/articles.php" class="btn">Статьи</a>
        </div> 
    </header>

    <div class="main-message-div">
        <div class="colorless-txt">
            <div class="message-div"> Тут ситуация такая же как и со вкладкой со статьями, событий пока что нет но как появятся это в скором времени отобразится и на сайте :)
            </div>
        </div>
    


        <?php
            $item_array = array (
                1 => array (
                    'title' => 'Пример события',
                    'hr' => 'event-example.php'
                )
            );
            echo('<div class="event-box">');
            foreach($item_array as $key => $item)
            echo('
                <div class="flx-msg">
                    <div class="message-div-compaired">
                        <span class="title-div"><a class="text-event-color" href="events-files/'.$item['hr'].'">'.$item['title'].'</a></span>
                    </div>
                </div>
            ');
            echo('</div>');
        ?>

    </div>


    <footer>
        <div class="footer-content">
            <div class="contacts">Мои контакты: </div>
            <div class="contacts">Номер телефона: +37377907026</div>
            <div class="contacts"><a href="https://vk.com/mrkell1" target="_blank" class="footer-href">Мой вк</a></div>
        </div>
    </footer>
</body>
</html>