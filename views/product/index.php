<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- //Meta tag Keywords -->
    <title>Clack Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="/template/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <!--/ Style-CSS -->
    <link rel="stylesheet" href="/template/css/style.css" type="text/css" media="all">
    <!--// Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="/template/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900"
          rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>

<div id="page" class="page">
    <div class="main-banner inner bg bg1" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1><a href="index.html" class="editContent"
                               style="outline: none; outline-offset: -2px; cursor: inherit; color: rgb(255, 255, 255); font-size: 40px; background-color: rgba(0, 0, 0, 0); font-family: &quot;Source Sans Pro&quot;, sans-serif;">DjangoMovie</a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.html">Главная</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Категории <span
                                    class="fa fa-angle-down" aria-hidden="true"
                                    style="outline: none; cursor: inherit;"></span> </label>
                            <a href="#">Категории <span class="fa fa-angle-down"
                                                        aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2">
                            <ul>
                                <li><a href="moviesingle.html">Фильмы</a></li>
                                <li><a href="moviesingle.html">Сериалы</a></li>
                                <li><a href="moviesingle.html">Мультфильмы</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html"
                               style="color: rgb(255, 255, 255); font-weight: 700; text-transform: uppercase;">Вход</a>
                        </li>
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
    </div>
    <!--//main-content-->
    <!---->
    <ol class="breadcrumb editContent">
        <li class="breadcrumb-item">
            <a href="index.html" class="editContent"
               style="outline: none; cursor: inherit;">Home</a>
        </li>
        <li class="breadcrumb-item active editContent" style="outline: none; cursor: inherit;">
            Single
        </li>
    </ol>
    <!---->
    <!-- banner -->
    <section class="ab-info-main py-md-5 py-4 editContent"
             style="outline: none; outline-offset: -2px; cursor: inherit; color: rgb(33, 37, 41); font-size: 16px; background-color: rgba(0, 0, 0, 0); font-family: Lato, sans-serif;">
        <div class="container py-md-3">
            <!-- top Products -->
            <div class="row">
                <!-- product left -->
                <div class="side-bar col-lg-4">

                    <div class="search-bar w3layouts-newsletter">
                        <h3 class="sear-head editContent" style="outline: none; cursor: inherit;">
                            Поиск фильма</h3>
                        <form action="#" method="post" class="d-flex editContent"
                              style="outline: none; cursor: inherit;">
                            <input type="search" placeholder="Введите название..." name="search"
                                   class="form-control" required="">
                            <button class="btn1 btn" style="outline: none; cursor: inherit;"><span
                                    class="fa fa-search" aria-hidden="true"
                                    style="outline: none; cursor: inherit;"></span></button>
                        </form>
                    </div>
                    <!--preference -->
                    <div class="left-side my-4">
                        <h3 class="sear-head editContent" style="outline: none; cursor: inherit;">
                            Жанры</h3>
                        <ul class="w3layouts-box-list">
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">Аниме</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">Боевики</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">Комедии</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">Ужасы</span>
                            </li>
                        </ul>
                    </div>
                    <!-- // preference -->
                    <!-- discounts -->
                    <div class="left-side">
                        <h3 class="sear-head editContent" style="outline: none; cursor: inherit;">
                            Год</h3>
                        <ul class="w3layouts-box-list">
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">2020</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">2019</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">2018</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">2017</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">2016</span>
                            </li>
                            <li class="editContent" style="outline: none; cursor: inherit;">
                                <input type="checkbox" class="checked">
                                <span class="span editContent"
                                      style="outline: none; cursor: inherit;">2015</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- reviews -->
                    <div class="customer-rev left-side my-4">
                        <h3 class="sear-head editContent" style="outline: none; cursor: inherit;">
                            Рейтинг</h3>
                        <ul class="w3layouts-box-list">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="editContent"
                                          style="outline: none; cursor: inherit;">5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="editContent"
                                          style="outline: none; cursor: inherit;">4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-half-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="editContent"
                                          style="outline: none; cursor: inherit;">3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="editContent"
                                          style="outline: none; cursor: inherit;">3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star" aria-hidden="true"></span>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-half-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="fa fa-star-o" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                    <span class="editContent"
                                          style="outline: none; cursor: inherit;">2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- deals -->
                    <div class="deal-leftmk left-side">
                        <h3 class="sear-head editContent">
                            Последние добавленные</h3>
                        <div class="special-sec1 row mt-3 editContent">
                            <div class="img-deals col-md-4">
                                <img src="/template/images/s4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="img-deal1 col-md-4">
                                <h3 class="editContent">Рэмбо: Последняя кровь</h3>
                                <a href="shop-single.html" class="editContent"
                                   style="outline: none; cursor: inherit;"></a>
                            </div>

                        </div>
                        <div class="special-sec1 row mt-3 editContent"
                             style="outline: none; cursor: inherit;">
                            <div class="img-deals col-md-4">
                                <img src="/template/images/s2.jpg" class="img-fluid" alt=""
                                     style="outline: none; cursor: inherit;">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3 class="editContent" style="outline: none; cursor: inherit;">
                                    Холодное сердце 2</h3>
                                <a href="shop-single.html" class="editContent"
                                   style="outline: none; cursor: inherit;"></a>
                            </div>

                        </div>
                        <div class="special-sec1 row mt-3 editContent"
                             style="outline: none; cursor: inherit;">
                            <div class="img-deals col-md-4">
                                <img src="/template/images/s1.jpg" class="img-fluid" alt=""
                                     style="outline: none; cursor: inherit;">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3 class="editContent" style="outline: none; cursor: inherit;">К
                                    звездам</h3>
                                <a href="shop-single.html" class="editContent"
                                   style="outline: none; cursor: inherit;"></a>
                            </div>

                        </div>
                        <div class="special-sec1 row mt-3 editContent"
                             style="outline: none; cursor: inherit;">
                            <div class="img-deals col-md-4">
                                <img src="/template/images/s5.jpg" class="img-fluid" alt=""
                                     style="outline: none; cursor: inherit;">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3 class="editContent" style="outline: none; cursor: inherit;">
                                    Терминатор: Темные судьбы</h3>
                                <a href="shop-single.html" class="editContent"
                                   style="outline: none; cursor: inherit;"></a>
                            </div>

                        </div>
                        <div class="special-sec1 row mt-3 editContent"
                             style="outline: none; cursor: inherit;">
                            <div class="img-deals col-md-4">
                                <img src="/template/images/s3.jpg" class="img-fluid" alt=""
                                     style="outline: none; cursor: inherit;">
                            </div>
                            <div class="img-deal1 col-md-8">
                                <h3 class="editContent" style="outline: none; cursor: inherit;">
                                    Джокер</h3>
                                <a href="shop-single.html" class="editContent"
                                   style="outline: none; cursor: inherit;"></a>
                            </div>

                        </div>
                    </div>
                    <!-- //deals -->
                    <!-- //deals -->

                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="left-ads-display col-lg-8">
                    <div class="row">
                        <div class="desc1-left col-md-6">
                            <img src="/template/images/<?php echo $viewproduct['image'];?>" class="img-fluid" alt="">
                        </div>
                        <div class="desc1-right col-md-6 pl-lg-4">
                            <h3 class="editContent" style="outline: none; cursor: inherit;">
                                <?php echo $viewproduct['name'];?></h3>
                            <h5 class="editContent">Terminator: Dark Fate</h5>
                            <ul>
                                <li style="list-style: none"><span><b>Год:</b> 2019</span></li>
                                <li style="list-style: none"><span><b>Страна:</b> США, Китай</span>
                                </li>
                                <li style="list-style: none"><span><b>Слоган:</b> «Welcome to the Day after Judgment Day»</span>
                                </li>
                                <li style="list-style: none">
                                    <span><b>Режиссер:</b> Тим Миллер</span></li>
                                <li style="list-style: none"><span><b>Актеры:</b> Арнольд Шварценеггер, Маккензи Дэвис,
                                    Эдвард Ферлонг, Линда Хэмилтон, Том Хоппер, Кассандра Старр, Гэбриел Луна,
                                    Наталия Рейес, Стивен Кри, Диего Бонета</span></li>
                                <li style="list-style: none"><span><b>Жанр:</b> фантастика, боевик, приключения</span>
                                </li>
                                <li style="list-style: none"><span><b>Премьера в мире:</b> 23 октября 2019</span>
                                </li>
                                <li style="list-style: none">
                                    <span><b>Бюджет:</b> $185 000 000</span></li>
                                <li style="list-style: none">
                                    <span><b>Сборы в США:</b> $61 150 256</span></li>
                                <li style="list-style: none"><span><b>Сборы в мире:</b> $250 369 693</span>
                                </li>
                                <li style="list-style: none">
                                    <a href="#"><b>Рейтинг:</b>
                                    <span class="fa fa-star" aria-hidden="true"
                                          style="outline: none; cursor: inherit;"></span>
                                        <span class="fa fa-star" aria-hidden="true"
                                              style="outline: none; cursor: inherit;"></span>
                                        <span class="fa fa-star" aria-hidden="true"
                                              style="outline: none; cursor: inherit;"></span>
                                        <span class="fa fa-star" aria-hidden="true"
                                              style="outline: none; cursor: inherit;"></span>
                                        <span class="fa fa-star" aria-hidden="true"
                                              style="outline: none; cursor: inherit;"></span>
                                        <span class="editContent"
                                              style="outline: none; cursor: inherit;">5.0</span>
                                    </a>
                                </li>
                                <div class="share-desc">
                                    <div class="share">
                                        <h4 class="editContent"
                                            style="outline: none; cursor: inherit;">
                                            Share:</h4>
                                        <ul class="w3layouts_social_list list-unstyled">
                                            <li>
                                                <a href="#" class="w3pvt_facebook editContent"
                                                   style="outline: none; cursor: inherit;">
                                                <span class="fa fa-facebook-f"
                                                      style="outline: none; cursor: inherit;"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="w3pvt_twitter editContent"
                                                   style="outline: none; cursor: inherit;">
                                                <span class="fa fa-twitter"
                                                      style="outline: none; cursor: inherit;"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="w3pvt_dribble editContent"
                                                   style="outline: none; cursor: inherit;">
                                                <span class="fa fa-dribbble"
                                                      style="outline: none; cursor: inherit;"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        </div>
                    </div>
                    <div class="row sub-para-w3layouts mt-5">

                        <h3 class="shop-sing editContent" style="outline: none; cursor: inherit;">
                            О фильме Терминатор: Темные судьбы</h3>
                        <p>
                            <img src="/template/images/about.jpg" class="img-fluid" alt="">
                            <img src="/template/images/admin.jpg" class="img-fluid" alt="">
                            <img src="/template/images/d1.jpg" class="img-fluid" alt="">
                        </p>
                        <p class="editContent" style="outline: none; cursor: inherit;">Сара Коннор
                            превратилась в настоящую охотницу
                            за терминаторами и теперь занимается уничтожением роботов-убийц из
                            будущего.
                            Она считала, что главное — это не дать им добраться до Джона, но теперь
                            появилась
                            Дани Рамос, от выживания которой также зависит судьба человечества.
                            Вместе с ней в бой вступает и загадочная Грейс, смесь человека и
                            машины.</p>
                        <p class="mt-3 italic-blue editContent"
                           style="outline: none; cursor: inherit;">
                            <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/A36LahZNUiE?controls=0"
                                    frameborder="0" allow="accelerometer; autoplay;
                                                                           encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>

                            </iframe>
                        </p>
                        <p class="mt-3 editContent" style="outline: none; cursor: inherit;">
                            Человечество дорого заплатило за технический прогресс, поставив под
                            угрозу свое выживание.
                            Пришло время покончить с войной между машинами и людьми.
                            Научно-фантастический боевик,
                            заключительная часть трилогии, перезапускающей франшизу «Терминатора»
                            Джеймса Кэмерона.
                        </p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="single-form-left">
                            <!-- contact form grid -->
                            <div class="contact-single">
                                <h3 class="editContent" style="outline: none; cursor: inherit;">
                                    <span class="sub-tittle editContent"
                                          style="outline: none; cursor: inherit;">02</span>Оставить отзыв</h3>
                                <form action="#" method="get" class="mt-4">
                                    <div class="form-group editContent"
                                         style="outline: none; cursor: inherit;">
                                        <label for="contactcomment" class="editContent"
                                               style="outline: none; cursor: inherit;">Ваш комментарий
                                            *</label>
                                        <textarea class="form-control border" rows="5"
                                                  id="contactcomment" required=""></textarea>
                                    </div>
                                    <div class="d-sm-flex">
                                        <div class="col-sm-6 form-group p-0 editContent"
                                             style="outline: none; cursor: inherit;">
                                            <label for="contactusername" class="editContent"
                                                   style="outline: none; cursor: inherit;">Имя
                                                *</label>
                                            <input type="text" class="form-control border"
                                                   id="contactusername" required="">
                                        </div>
                                        <div class="col-sm-6 form-group ml-sm-3 editContent"
                                             style="outline: none; cursor: inherit;">
                                            <label for="contactemail" class="editContent"
                                                   style="outline: none; cursor: inherit;">Email
                                                *</label>
                                            <input type="email" class="form-control border"
                                                   id="contactemail" required="">
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="mt-3 btn btn-success btn-block py-3"
                                            style="outline: none; cursor: inherit;">Отправить
                                    </button>
                                </form>
                            </div>
                            <!--  //contact form grid ends here -->
                        </div>
                        <div class="media py-5">
                            <img src="/template/images/te2.jpg" class="mr-3 img-fluid" alt="image"
                                 style="outline: none; cursor: inherit;">
                            <div class="media-body mt-4">
                                <h5 class="mt-0 editContent"
                                    style="outline: none; cursor: inherit;">Daniel Doe</h5>
                                <p class="mt-2 editContent" style="outline: none; cursor: inherit;">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                    vulputate at, tempus viverra turpis.
                                </p>
                                <div class="media mt-5 editContent"
                                     style="outline: none; cursor: inherit;">
                                    <a class="pr-3" href="#">
                                        <img src="/template/images/te1.jpg" class="img-fluid "
                                             alt="image" style="outline: none; cursor: inherit;">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="mt-0 editContent"
                                            style="outline: none; cursor: inherit;">Leia Organa</h5>
                                        <p class="mt-2 editContent"
                                           style="outline: none; cursor: inherit;"> Cras sit amet
                                            nibh libero, in gravida nulla. Nulla vel metus
                                            scelerisque ante sollicitudin. Cras purus odio,
                                            vestibulum in vulputate at, tempus viverra turpis. Fusce
                                            condimentum nunc ac nisi vulputate fringilla..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
    <footer class="editContent">
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="index.html" class="editContent">
                                <span class="fa" aria-hidden="true"
                                      style="outline: none; cursor: inherit;">
                                    Django School
                                </span>
                        </a>
                    </h2>
                    <p class="editContent" style="outline: none; cursor: inherit;">
                        Канал для программистов и людей, которые хотят развиваться в сфере IT.
                        Видео уроки по python 3, Django 2, Django 3, JavaScript, Vue.js, HTML, CSS
                        и многое другое.
                    </p>
                    <h4 class="sub-con-fo ad-info my-4 editContent"
                        style="outline: none; cursor: inherit;">Catch on Social</h4>
                    <ul class="w3layouts_social_list media-soc list-unstyled">
                        <li>
                            <a href="#" class="w3pvt_facebook editContent"
                               style="outline: none; cursor: inherit;">
                                <span class="fa fa-facebook-f"
                                      style="outline: none; cursor: inherit;"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3pvt_twitter editContent"
                               style="outline: none; cursor: inherit;">
                                <span class="fa fa-twitter"
                                      style="outline: none; cursor: inherit;"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3pvt_dribble editContent"
                               style="outline: none; cursor: inherit;">
                                <span class="fa fa-dribbble"
                                      style="outline: none; cursor: inherit;"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3pvt_google editContent"
                               style="outline: none; cursor: inherit;">
                                <span class="fa fa-google-plus"
                                      style="outline: none; cursor: inherit;"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 footer-right">
                    <div class="w3layouts-news-letter">
                        <h3 class="footer-title text-uppercase editContent mb-lg-4 mb-3"
                            style="outline: none; cursor: inherit;">Newsletter</h3>

                        <p class="editContent" style="outline: none; cursor: inherit;">By
                            subscribing to our mailing list you will always get latest news and
                            updates from us.</p>
                        <form action="#" method="post" class="w3layouts-newsletter">
                            <input type="email" name="Email" class="editContent"
                                   placeholder="Enter your email..." required=""
                                   style="outline: none; cursor: inherit;">
                            <button class="btn1 btn" style="outline: none; cursor: inherit;"><span
                                    class="fa fa-paper-plane-o" aria-hidden="true"
                                    style="outline: none; cursor: inherit;"></span></button>

                        </form>
                    </div>
                    <div class="row mt-lg-4 bottom-w3layouts-sec-nav mx-0">
                        <div class="col-md-4 footer-grid_section_w3layouts">
                            <h3 class="footer-title text-uppercase editContent mb-lg-4 mb-3"
                                style="outline: none; cursor: inherit;">Разделы</h3>
                            <ul class="list-unstyled w3layouts-icons">
                                <li>
                                    <a href="index.html" class="editContent"
                                       style="outline: none; cursor: inherit;">Главная</a>
                                </li>
                                <li>
                                    <a href="about.html" class="editContent"
                                       style="outline: none; cursor: inherit;">Категории</a>
                                </li>
                                <li>
                                    <a href="contact.html" class="editContent"
                                       style="outline: none; cursor: inherit;">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 footer-grid_section_w3layouts">
                            <!-- social icons -->
                            <div class="agileinfo_social_icons">
                                <h3 class="footer-title text-uppercase editContent mb-lg-4 mb-3"
                                    style="outline: none; cursor: inherit;">Pages</h3>
                                <ul class="list-unstyled w3layouts-icons">

                                    <li>
                                        <a href="#" class="editContent"
                                           style="outline: none; cursor: inherit;">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="editContent"
                                           style="outline: none; cursor: inherit;">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="editContent"
                                           style="outline: none; cursor: inherit;">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="editContent"
                                           style="outline: none; cursor: inherit;">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="editContent"
                                           style="outline: none; cursor: inherit;">About Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- social icons -->
                        </div>
                        <div class="col-md-4 footer-grid_section_w3layouts my-md-0 my-5">
                            <h3 class="footer-title text-uppercase text-wh mb-lg-4 mb-3 editContent"
                                style="outline: none; cursor: inherit;">Contact Info</h3>
                            <div class="contact-info">
                                <div class="footer-address-inf my-4">
                                    <h4 class="ad-info mb-2 editContent"
                                        style="outline: none; cursor: inherit;">Email </h4>
                                    <p class="editContent" style="outline: none; cursor: inherit;">
                                        <a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
                                <div class="footer-address-inf">
                                    <h4 class="ad-info mb-2 editContent"
                                        style="outline: none; cursor: inherit;">Location</h4>
                                    <p class="editContent" style="outline: none; cursor: inherit;">
                                        New York City</p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <div class="cpy-right py-3">
        <div class="container">
            <div class="row">
                <p class="col-md-10 text-left">© 2019 DjangoMovie. All rights reserved | Design by
                    <a href="https://djangochannel.com"> DJANGO SCHOOL.</a>
                </p>
                <!-- move top icon -->
                <a href="#home" class="move-top text-right col-md-2"><span
                        class="fa fa-long-arrow-up" aria-hidden="true"
                        style="outline: none; cursor: inherit;"></span></a>
                <!-- //move top icon -->
            </div>
        </div>
    </div>
</div>
</body>
