<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--подключение бутстрапа-->
    <link rel="stylesheet" href="./style.css">
    <title>HomePlants</title>
</head>

<body>
<?php include 'catalog.php'?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!--для центрирования блока-->
                <a href="#Description" class="navbar-brand"> <img src="./images/logo 1.svg"></a>
                <button class="navbar-toggler" type="button" data-bs-togale="collapse" data-bs-target="#navContent"
                    aria-contrlos="navContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!--бургер меню, дата тогл - атрибут который позволит меню сворачиваться-->
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-nav navbar-collapse justify-content-end">
                    <!--Базовые классы для того, чтобы показать какой блок будет сворачиваться-->
                    <a href="#About" class="nav-link">О нас</a>
                    <a href="#Catalog" class="nav-link">Каталог</a>
                    <a href="#Blog" class="nav-link">Блог</a>
                    <a href="#Contacts" class="nav-link">Контакты</a>
                    <a href="#FAQ" class="nav-link">FAQ</a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div id="Description">
                <div class="description">
                    <h1>Джунгли у вас дома</h1>
                    <p>У нас растения за которыми легко ухаживать</p>
                    <button class="btn btn-outline-dark">Подобрать растение</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div id="About">
            <div class="row justify-content-between about">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <img src="./images/about.png" class="img fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 desc">
                    <div class="about-desc">
                        <h2>О нас</h2>
                        <p>
                            Наша команда из опытных специалистов выращивает здоровые растения, которые будут радовать
                            вас
                            долгие
                            годы. Сопровождаем каждого клиента по вопросам ухода, а при покупке даем памятку по
                            растению.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="Catalog">
            <div class="catalog">
                <div class="header">
                    <h2 class="text-left">Наши растения</h2>
                    <p class="text-left">Выберите растение себе по душе</p>
                </div>

                <div class="row">
                    <?php foreach($data as $product): ?>
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <div class="card">
                            <img src="./images/<?=$product['img']?>" class="card-img-top"
                                alt="chris-lee">
                            <div class="card-body">
                                <div class="card-desc">
                                    <p class="card-title"><?=$product['title']?></p>
                                    <p class="card-text"><?=$product['min_price']?>₽ - <?=$product['max_price']?>₽</p>
                                </div>
                                <a href="#" class="btn btn-outline-dark">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    </div>
                        </div>
                    </div>

                    <div class="CTA d-flex align-items-center">
        <div class="container CTA-content">
            <div class="header col-md-9 col-lg-9 col-sm-12">
                <h3>Форма для заказа</h3>
            </div>
            <form method="POST" action="form.php">
            <div class="row CTA-form">
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Name">
                </div>
                                <div class="col-md-3">
                    <input type="text" name="plant" class="form-control" placeholder="Наименование растения" aria-label="Plant">
                </div>
                <div class="col-md-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Заказать</a>
            </div>
                    </form>
    </div>

    <div class="CTA d-flex align-items-center">
        <div class="container CTA-content">
            <div class="header col-md-9 col-lg-9 col-sm-12">
                <h3>Получите гайд по любому растению бесплатно</h3>
            </div>
            <form method="POST" action="form.php">
            <div class="row CTA-form">
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Name">
                </div>
                                <div class="col-md-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Получить гайд</a>
            </div>
                    </form>
    </div>

    <div class="container">
        <div id="Blog">
            <div class="blog">
                <div class="header">
                    <h2 class="text-left">Блог</h2>
                    <p class="text-left">Узнайте больше полезной информации об уходе за растениями</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="card">
                            <img src="./images/news_card.png" class="card-img-top" alt="news-card">
                            <div class="card-body">
                                <div class="card-desc d-flex justify-content-between">
                                    <p class="card-title">Как выбрать растение домой</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="card">
                            <img src="./images/news_card.png" class="card-img-top" alt="news-card">
                            <div class="card-body">
                                <div class="card-desc d-flex justify-content-between">
                                    <p class="card-title">Как выбрать растение домой</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6 col-md-6 col-sm-10">
                                <div class="card">
                                    <img src="./images/news_card.png" class="card-img-top" alt="news-card">
                                    <div class="card-body">
                                        <div class="card-desc d-flex justify-content-between"">
                                        <p class=" card-title">Как выбрать растение домой</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-10">
                                <div class="card">
                                    <img src="./images/news_card.png" class="card-img-top" alt="news-card">
                                    <div class="card-body">
                                        <div class="card-desc d-flex justify-content-between"">
                                        <p class=" card-title">Как выбрать растение домой</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts d-flex align-items-center">
                                <div class="container">
                                    <div id="Contacts">
                                        <div class="contacts header offset-md-6">
                                            <h3>Оставайтесь с нами на связи</h3>
                                        </div>
                                        <div class="contacts-desc offset-md-6 mt-4">
                                            <p>+7 999 123 45-67</p>
                                            <p>Телеграм</p>
                                            <p>Вконтакте</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <section id="FAQ">
                                <div class="container">
                                    <h2 class="title">FAQ</h2>
                                    <div class="faq">
                                        <div class="question">
                                            <h3>First question</h3>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg>
                                        </div>
                                        
                                        <div class="answer">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <footer class="d-flex flex-column align-items-center mt-5">
                                <a href="" class="navbar-brand"><img src="./images/logo 1.svg"></a>
                                <p>HomePlants</p>
                                <p>2022</p>
                            </footer>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                                crossorigin="anonymous"></script>
                            <script src="./script.js"></script>
</body>

</html>