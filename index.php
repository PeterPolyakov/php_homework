<?php
$isAuth = true;
$time = date("H:m");
$title = "Hotels24";
$int = 33;
$float = 33.33;
$n = NULL;
$array = [1, 2, 3, 4, 5];
define('yearOfBirth', 1993);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hotels24</title>
</head>

<body>
    <div class="wrapper">
        <div class="contain">
            <nav class="header-nav-menu">
                <div class="logo">
                    <a href="#" class="logo"><img class="header-logo" src="./assets/logo_white.png" alt="header-logo"></a>
                </div>
                <div class="nav-menu">
                    <div class="nav-menu-item"><a href='#'>Отели</a></div>
                    <div class="nav-menu-item"><a href='#'>Билеты</a></div>
                    <div class="nav-menu-item"><a href='#'>Отдых</a></div>
                    <?php if ($isAuth) : ?>
                        <div class="nav-menu-item"><a href='#'>Добавить объект</a></div>
                    <?php endif; ?>
                </div>
                <div class="auth-search">
                    <div class="auth">
                        <?php if ($isAuth) : ?>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php if ($time > "05:00" && $time < "09:00") : ?>
                                        Доброе утро
                                    <?php elseif ($time > "09:00" && $time < "17:00") : ?>
                                        Привет
                                    <?php else : ?>
                                        Добрый вечер
                                    <?php endif; ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Кабинет</a></li>
                                    <li><a class="dropdown-item" href="#">Выйти</a></li>
                                </ul>
                            </div>
                        <?php else : ?>
                            <button>Войти</button>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
            <h1 class="title">Бронирование отелей, квартир, хостелов</h1>
            <h2 class="subtitle">ПО УКРАИНЕ И МИРУ</h2>
            <h3 class="butto"><button class="search-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Поиск</button></h3>
            <div class="search-contain">
                <div class="search-modal offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <div class="container">
                            <h5 class="search-title text-center" id="offcanvasTopLabel">Куда едем?</h5>
                            <form>
                                <div class="search-block offcanvas-body">
                                    <input class="search" type="search" name="search" autofocus placeholder="Город или отель">
                                    <input class="date" type="date" name="" placeholder="Дата заезда">
                                    <input class="submit" type="submit" value="Поиск">
                                </div>
                            </form>
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="contain">
        <h3 class="slid-title text-center">Откройте для себя Украину</h3>
        <div class="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Буковель</h2>
                            <h5>49 вариантов размещения</h5>
                        </div>
                        <img src="assets/bukovel.jpg" class="d-block w-100 slid-img" alt="h-kramatorsk">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Харьков</h2>
                            <h5>33 варианта размещения</h5>
                        </div>
                        <img src="assets/kharkov.jpg" class="d-block w-100 slid-img" alt="h-aisty">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Киев</h2>
                            <h5>124 варианта размещения</h5>
                        </div>
                        <img src="assets/kiev.jpg" class="d-block w-100 slid-img" alt="h-gut">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Краматорск</h2>
                            <h5>23 варианта размещения</h5>
                        </div>
                        <img src="assets/kramatorsk-flag.jpg" class="d-block w-100 slid-img" alt="h-kramatorsk">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Одесса</h2>
                            <h5>75 вариантов размещения</h5>
                        </div>
                        <img src="assets/odessa.jpg" class="d-block w-100 slid-img" alt="h-aisty">
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Святогорск</h2>
                            <h5>35 вариантов размещения</h5>
                        </div>
                        <img src="assets/svyatogorskaya-lavra.jpg" class="d-block w-100 slid-img" alt="h-gut">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <h2>Популярные отели</h2>
        <div class="cards-popular d-flex justify-content-between">
            <div class="card cards" style="width: 18rem; border: 3px solid rgb(251,176,53);">
                <img src="assets/h-kramatorsk.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Отель "Краматорск"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card cards" style="width: 18rem; border: 3px solid rgb(251,176,53);">
                <img src="assets/h-aisty.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Отель "Аисты"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card cards" style="width: 18rem; border: 3px solid rgb(251,176,53);">
                <img src="assets/h-gut.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Отель "Gut"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card cards" style="width: 18rem; border: 3px solid rgb(251,176,53);">
                <img src="assets/bukovel.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Отель "Буковель"</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
        <h2 class="mb-3">Отзывы наших клиентов</h2>
        <div class="reviews d-flex justify-content-between">
            <div class="review">
                <p class="review-body">
                    Мне очень понравилось, что для меня подобрали жилье исходя из моих потребностей.
                    Мне не нужно было тратить свое время для поиска.
                </p>
                <p class="review-user">
                    ​<i>Виктор Михайлов</i>
                </p>
                <div class="review-img">
                    <img src="assets/reveiw03.png" alt="">
                </div>
            </div>
            <div class="review">
                <p class="review-body">
                    Мне очень понравилось, что для меня подобрали жилье исходя из моих потребностей.
                    Мне не нужно было тратить свое время для поиска.
                </p>
                <p class="review-user">
                    <i>​Виктор Михайлов</i>
                </p>
                <div class="review-img">
                    <img src="assets/reveiw03.png" alt="">
                </div>
            </div>
            <div class="review">
                <p class="review-body">
                    Мне очень понравилось, что для меня подобрали жилье исходя из моих потребностей.
                    Мне не нужно было тратить свое время для поиска.
                </p>
                <p class="review-user">
                    ​<i>Виктор Михайлов</i>
                </p>
                <div class="review-img">
                    <img src="assets/reveiw03.png" alt="">
                </div>
            </div>
        </div>
        <h2>Наши партнеры</h2>
        <div class="partners">

        </div>
    </main>

    <footer class="footer">
        <div class="contain">
            <div class="footer-logo">
                <img src="assets/logo_white.png" alt="header-logo">
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>