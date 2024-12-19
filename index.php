<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>заказать мебель</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
<?php
    $message = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_GET['User_Name']) && !empty($_GET['Phone_Number'])) {
        $name = $_GET['User_Name'];
        $phone = $_GET['Phone_Number'];
        $email = $_GET['Email_Number'];
        $message = "Отлично, мы перезвоним вам в течение часа, <b>$name</b> по вашему номеру телефона: <b>$phone</b>. А так прислали вам сообщение на вашу почту: <b>$email</b>";
    }
?>
    </head>
    <body>
        <section class="mask">
            <selection class="loader"></selection>
        </section>
        <script src="js/main.js"></script>
        <header class="header__main">
            <ul class="header__mainlist">
                <li><img class="logo" src="img/logo.png" alt=""></li>
                <nav class="header__mainlistitem">
                    <li class="header__mainlistitem1">О нас</li>
                    <li class="header__mainlistitem1">Проекты</li>
                    <li class="header__mainlistitem1">Материалы</li>
                    <li class="header__mainlistitem1">Отзывы</li>
                </nav>
                <li class="number__item">+7 999 999 99 99</li>
            </ul>
        </header>
        <section class="hero">
            <ul class="hero__mainlist">
                <li class="main__text">ЭКСКЛЮЗИВНАЯ И НЕСТАНДАРТНАЯ МЕБЕЛЬ ДЛЯ ДОМА</li>
                <li class="zakaz">ЗАКАЗАТЬ ПРООЕКТ</li>
            </ul>
            <ul class="hero__cart">
                <span>
                <li class="main__textoffer">Мы можем произвести любую мебель для вашего проекта и найти производственное решение любой задумки.</li>
                <ul class="log12">
                    <li><img class="log1" src="img/левый.jfif" alt=""/></li>
                </span>
                <li><img class="log2" src="img/правый.jfif" alt=""/></li>
                </ul>
            </ul>
            </section>
        </section>
        <about>
            <section class="about">
                <ul class="about__text">
                    <li class="about__text1">Более 5 лет создаем мебель для вашего комфорта</li>
                    <span>
                        <li class="about__text2">Мы — команда профессионалов, которые могут произвести любую мебель для вашего проекта, а также найти производственное решение любой задумки.</li>
                        <li class="about__text2">Наша основная цель — реализовывать самые смелые задумки, и делать это качественно и аккуратно.</li>
                        <li class="about__text2">В качестве материалов мы используем натуральные — стекло, дерево, бетон, камень, металл и эпоксидную смолу.</li>
                    </span>
                </ul>
                <ul class="about__text11">
                    <li class="about__text1111">1 год</li>
                    <li class="about__text1112">гарантии на всю продукцию</li>
                    <li class="about__text1111">300+</li>
                    <li class="about__text1112">выполненных проектов</li>
                    <li class="about__text1111">15 дней</li>
                    <li class="about__text1112">срок производства</li>
                </ul>
            </section>
        </about>
        <steps>
            <selection class="steps">
                <ul class="steps__text">
                    <li class="steps__text1">Как мы работаем</li>
                    <li class="steps__text11">Алгоритм работы с нами для удобства и понимания проекта</li>
                </ul>
                <ul class="steps__items">
                    <li class="steps__items1">Идея</li>
                    <li class="steps__items11">Клиент приходит к нам с идеей. Это может быть изображение/эскиз или другой референс. А мы думаем над тем, как это реализовать, делаем технические чертежи и предлагаем решения по материалам.</li>
                </ul>
                <ul class="steps__items">
                    <li class="steps__items1">Техническое задание</li>
                    <li class="steps__items11">Вместе с клиентом формулируем корректное ТЗ, которое включает в себя визуализацию изделия, эскизный чертёж с габаритами, информацию по материалам и отделке, срок реализации проекта и другие обязательные пункты</li>
                </ul>
                <ul class="steps__items">
                    <li class="steps__items1">Коммерческое предложение</li>
                    <li class="steps__items11">Предпочтительно используем натуральные материалы. Но любую смету можем оптимизировать, упростив материалы или конструктив. Сможем подстроиться под бюджет клиента и согласуем коммерческое предложение</li>
                </ul>
                <ul class="steps__items">
                    <li class="steps__items1">Подготовка рабочего проекта</li>
                    <li class="steps__items11">Создадим рабочую документацию и чертежи. Это фундамент качественного производства. На этом этапе утверждаем с клиентом все габариты и материалы, чертежи и приступаем к производству.</li>
                </ul>
                <ul class="steps__items">
                    <li class="steps__items1">Производство и монтаж</li>
                    <li class="steps__items11">Производство занимает от 15 рабочих дней, в зависимости от сложности и объёма. Монтажом тоже занимаемся самостоятельно. Ведь мы это сделаем быстро и аккуратно.</li>
                </ul>
            </selection>
        </steps>
        <projects>
            <selecion>
                <ul class="projects">
                    <li class="projects1">Проекты</li>
                </ul>
                <ul class="loggos">
                    <li><img class="logos1" src="img/tele.png" alt=""/></li>
                    <li><img class="logos1" src="img/cran.jfif" alt=""/></li>
                    <li><img class="logos1" src="img/stul.jfif" alt=""/></li>
                </ul>
                <ul class="loggos">
                    <li><img class="logos2" src="img/desk.jfif" alt=""/></li>
                    <li><img class="logos2" src="img/bed.jfif" alt=""/></li>
                    <li><img class="logos2" src="img/mebel.jfif" alt=""/></li>
                </ul>
            </selecion>
        </projects>
        <testimonials>
            <li class="otzyv">Отзывы</li>
            <selection class="testimonials0">
                <ul class="testimonials">
                    <li><img class="zap" src="img/zap.png" alt=""/></li>
                    <li class="testimonials__maintext1">Игорь Антонов</li>
                    <li class="testimonials__maintext2">Обратилась к Aveji по рекомендации. Команда сразу поняла, какой дизайн я хочу. Предоставили несколько вариантов и в течение недели сделали наброски. Итог понравился, все на высшем уровне.</li>
                </ul>
                <ul class="testimonials">
                    <li><img class="zap" src="img/zap.png" alt=""/></li>
                    <li class="testimonials__maintext1">Ольга Иванова</li>
                    <li class="testimonials__maintext2">После пары заказов у компании Aveji убедилась, что за мебелью теперь только к ним. Абсолютно любые решения, в любых размерах и форм-факторе, то что нужно!</li>
                </ul>
                <ul class="testimonials">
                    <li><img class="zap" src="img/zap.png" alt=""/></li>
                    <li class="testimonials__maintext1">Аркадий Макаров</li>
                    <li class="testimonials__maintext2">Aveji — настоящие профессионалы своего дела. Быстро поняли мою задумку, сделали дизайн, согласовали и изготовили мебель. А потом еще и бесплатно все собрали на месте. Большое спасибо!</li>
                </ul>
            </selection>
        </testimonials>
        <form>
            <selection class="form">
                <img class="form__img" src="img/form.jfif" alt="">
                <ul class="form__text">
                    <li class="form__text1">Хотите заказать проект?</li>
                    <li class="form__text2">Оставьте заявку, и мы вам перезвоним</li>
                    <ul class="form__about">
                        <li><input type="text" class="form__about1" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]+" title="Допустимые символы: буквы русского и латинского алфавита" id="Name" name="User_Name" required></li>
                        <li><input type="email" class="form__about1" placeholder="E-mail" title="Введите корректный адрес электронной почты" id="Email" name="Email_Number" required></li>
                        <li><input type="tel" class="form__about1 " placeholder="Телефон" pattern="8\d{10}" maxlength="11" title="Допускаются только 11 цифр и начинается с 8" id="Number" name="Phone_Number" required>
                        <li><button type="submit" class="form__button">Отправить заявку</button></li>
                        <ul class="about__images">
                            <img class="about__images1" src="img/app.png" alt="">
                            <img class="about__images2" src="img/google.png" alt="">
                        </ul>
                        <selection class="php1">
                            <?php if (!empty($message)) echo $message; ?>
                        </selection>
                    </ul>
                </ul>
            </selection>
        </form>
        <footer>
            <selection class="footer">
                <ul class="footer1">
                    <ul class="footer__info">
                        <li>© 2023 Aveji</li>
                        <li>Все права защищены</li>
                    </ul>
                    <ul class="footer__politic">
                        <li>Политика конфеденциальности / Оплата и доставка</li>
                    </ul>
                    <ul class="footer__social">
                        <li>ВКОНТАКТЕ</li>
                        <li">ТЕЛЕГРАМ</li>
                    </ul>
                </ul>
            </selection>
        </footer>
</body>
</html>