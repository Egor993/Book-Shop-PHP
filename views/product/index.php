<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Book Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/template/css/bootstrap.css">

    <link rel="stylesheet" href="/template/css/style.css" type="text/css" media="all">

    <link href="/template/css/font-awesome.css" rel="stylesheet">

    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
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
                               style="outline: none; outline-offset: -2px; cursor: inherit; color: rgb(255, 255, 255); font-size: 40px; background-color: rgba(0, 0, 0, 0); font-family: &quot;Source Sans Pro&quot;, sans-serif;">Book Shop</a>
                        </h1>
                    </div>

                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
						<ul class="menu mt-2">
                            <li><a href="/">Главная</a></li>
                            <li><a href="#">О магазине</a></li>
                            <li><a href="#">Контакты</a></li>
                            <?php if (!isset($_SESSION['user'])): ?>
                            <li><a href="/register">Регистрация</a></li>
                            <li><a href="/login">Вход</a></li>
                            <?php else: ?>
                            <li>(<?php echo $_SESSION['user']?>)<a href="/exit">Выход</a></li>
                            <li><a href="/profile">Личный кабинет</a></li>
                            <?php endif; ?>
                            <li><a href="/cart">Корзина</a></li>
                            <span id='cart-count'><?php echo Cart::countItems(); ?></span>
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
                    <div class="side-bar col-lg-4">

                        <div class="search-bar w3layouts-newsletter">
                            <h3 class="sear-head editContent">Поиск книги</h3>
                            <form action="/" method="post" class="d-flex editContent" >
                                <input type="search" placeholder="Введите название..." name="search" class="form-control" required="">
                                <button class="btn1 btn" ><span class="fa fa-search" aria-hidden="true" ></span></button>
                            </form>
                        </div>
                        <!--preference -->
                            <form action="/" method="post">
                            <div class="left-side my-4">
                                <h3 class="sear-head editContent">Жанры</h3>
                                <ul class="w3layouts-box-list">
                                    
                                        <li class="editContent">
                                             <button type="sumbit" class="btn genre" name="genre[]" value="'Биография'">Биография</button>
                                            </button>
                                        </li>
                                    
                                        <li class="editContent">
                                             <button type="sumbit" class="btn genre" name="genre[]" value="'Драма'">Драма</button>
                                            </button>
                                        </li>
                                    
                                </ul>
                            </div>
                            
                            </form>
                        <!-- // preference -->

                        <!-- reviews -->
                        <form action="/" method="post">
                        <div class="customer-rev left-side my-4">
                            <h3 class="sear-head editContent" >Рейтинг</h3>
                            <ul class="w3layouts-box-list">
                                <li>
                                    <a href="#">
                                    <button type="sumbit" name ='rating' value ='5' class="btn rating">
                                        
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="editContent" >5</span>
                                    </button>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                    <button type="sumbit" name ='rating' value ='4' class="btn rating">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >4</span>
                                    </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <button type="sumbit" name ='rating' value ='3' class="btn rating">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >3</span>
                                    </button>
                                    <a>
                                </li>
                                <li>
                                    <a href="#">
                                    <button type="sumbit" name ='rating' value ='2' class="btn rating">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >2</span>
                                    </button>
                                    <a>
                                </li>
                                <li>
                                    <a href="#">
                                    <button type="sumbit" name ='rating' value ='1' class="btn rating">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >1</span>
                                    </button>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <button type="sumbit" name ='rating' value ='0' class="btn rating">
                                        <span class="fa fa-star-o" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >0</span>
                                    </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </form>
                        <!-- //reviews -->
                        <!-- deals -->
                        <div class="deal-leftmk left-side">
                            <h3 class="sear-head editContent">Последние добавленные</h3>
                            <div class="special-sec1 row mt-3 editContent">
                                <div class="img-deals col-md-4">
                                    <img src="/template/images/s5.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="img-deal1 col-md-4">
                                    <h3 class="editContent">Крестный отец</h3>
                                    <a href="moviesingle.html" class="editContent" ></a>
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
                                    <b>Рейтинг:</b>
                                    <?php if(!(isset($_SESSION[$id.'i']))): ?>
                                        <form method="post">
        									<div class="rating-area">
        										<input type="radio" id="star-5" name="rating" value="5">
        										<label for="star-5" title="Оценка «5»"></label>	
        										<input type="radio" id="star-4" name="rating" value="4">
        										<label for="star-4" title="Оценка «4»"></label>    
        										<input type="radio" id="star-3" name="rating" value="3">
        										<label for="star-3" title="Оценка «3»"></label>  
        										<input type="radio" id="star-2" name="rating" value="2">
        										<label for="star-2" title="Оценка «2»"></label>    
        										<input type="radio" id="star-1" name="rating" value="1">
        										<label for="star-1" title="Оценка «1»"></label>
                                                
                                                <h4><?php echo $rating ?></h4>
        									</div>
                                            <button type="sumbit" onclick="">Оценить</button>
                                        </form>
                                    <?php else:?>
                                    <h4><?php echo $rating ?></h4>
                                        <div class="rating-result">
                                            <span class="active"></span>    
                                            <span class="<?php if($_SESSION[$id.'i'] > 1 )echo 'active'; ?>"></span>    
                                            <span class="<?php if($_SESSION[$id.'i'] > 2 )echo 'active'; ?>"></span>  
                                            <span class="<?php if($_SESSION[$id.'i'] > 3 )echo 'active'; ?>"></span>
                                            <span class="<?php if($_SESSION[$id.'i'] > 4 )echo 'active'; ?>"></span>
                                        </div>
                                    <?php endif; ?>
                                </li>
                                <br> <br />
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
                                          style="outline: none; cursor: inherit;"></span>Оставить отзыв</h3>
                                <form action="#" method="post" class="mt-4">
                                    <div class="form-group editContent"
                                         style="outline: none; cursor: inherit;">
                                        <label for="contactcomment" class="editContent"
                                               style="outline: none; cursor: inherit;">Ваш комментарий
                                            *</label>
                                        <textarea class="form-control border" rows="10" cols="90" 
                                                  id="contactcomment" required="" name='comment'></textarea>
                                    </div>
                                    <button type="submit" name="submit"
                                            class="mt-3 btn btn-success btn-block py-3"
                                            style="outline: none; cursor: inherit;">Отправить
                                    </button>
                                </form>
                            </div>
                            <!--  //contact form grid ends here -->
                        <?php for($i = 0; $i < count($comments); $i++): ?>
                        <div class="media py-5">
                            <img src="/template/images/profile/<?php echo $image_name ?>" class="mr-3 img-fluid" alt="image"
                                 style="outline: none; cursor: inherit;">
                            <div class="media-body mt-4">
                                <h5 class="mt-0 editContent"
                                    style="outline: none; cursor: inherit;"><?php foreach($comments[$i] as $name=>$text) echo $name; ?></h5>
                                <p class="mt-2 editContent" style="outline: none; cursor: inherit;">
                                    <?php foreach($comments[$i] as $name=>$text) echo $text; ?>
                                </p>
                        </div>
                            </div>
                         <?php endfor;?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- footer -->
   <?php include ROOT.'/views/include/footer.php'; ?>
</body>
