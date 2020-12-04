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
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<!-- Heeader -->
<?php include ROOT.'/views/include/header.php'; ?>

        </div>
        <!--//main-content-->
        <!---->
        <ol class="breadcrumb editContent">
            <li class="breadcrumb-item">
                <a href="index.html" class="editContent">Home</a>
            </li>
            <li class="breadcrumb-item active editContent">Single Page</li>
        </ol>
        <!---->
        <!-- banner -->
        <section class="ab-info-main py-md-5 py-4 editContent" style="padding-left: 3rem; padding-right: 3rem;">
            <div class="container-fluid py-md-3">
                <div class="row">
                    <div class="side-bar col-lg-3">

                        <div class="search-bar w3layouts-newsletter">
                            <h3 class="sear-head editContent" >Поиск фильма</h3>
                            <form action="#" method="post" class="d-flex editContent" >
                                <input type="search" placeholder="Введите название..." name="search" class="form-control" required="">
                                <button class="btn1 btn" ><span class="fa fa-search" aria-hidden="true" ></span></button>
                            </form>
                        </div>
                        <!--preference -->
                        <div class="left-side my-4">
                            <h3 class="sear-head editContent" >Жанры</h3>
                            <ul class="w3layouts-box-list">
                                <?php foreach ($genres as $item): ?>
                                <li class="editContent" >
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" ><?php echo $item['name'];?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- // preference -->
                        <!-- discounts -->
                        <div class="left-side">
                            <h3 class="sear-head editContent" >Год</h3>
                            <ul class="w3layouts-box-list">
                                <li class="editContent" >
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" >2020</span>
                                </li>
                                <li class="editContent" >
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" >2019</span>
                                </li>
                                <li class="editContent" >
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" >2018</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" >2017</span>
                                </li>
                                <li class="editContent" >
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" >2016</span>
                                </li>
                                <li class="editContent" >
                                    <input type="checkbox" class="checked">
                                    <span class="span editContent" >2015</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //discounts -->
                        <!-- reviews -->
                        <div class="customer-rev left-side my-4">
                            <h3 class="sear-head editContent" >Рейтинг</h3>
                            <ul class="w3layouts-box-list">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="editContent" >5.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >4.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-half-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >3.5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >3.0</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        <span class="fa fa-star" aria-hidden="true" ></span>
                                        <span class="fa fa-star-half-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="fa fa-star-o" aria-hidden="true" ></span>
                                        <span class="editContent" >2.5</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //reviews -->
                        <!-- deals -->
                        <div class="deal-leftmk left-side">
                            <h3 class="sear-head editContent">Последние добавленные</h3>
                            <div class="special-sec1 row mt-3 editContent">
                                <div class="img-deals col-md-4">
                                    <img src="template/images/s5.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="img-deal1 col-md-4">
                                    <h3 class="editContent">Крестный отец</h3>
                                    <a href="moviesingle.html" class="editContent" ></a>
                                </div>

                            </div>
                        </div>
                        <!-- //deals -->

                    </div>
                    <!-- //product left -->
                    <!-- product right -->
                    <div class="left-ads-display col-lg-9">
                        <div class="row">
                            <?php foreach ($latestProducts as $product): ?>
                            <div class="col-md-2">
                                <div class="product-shoe-info editContent text-center mt-lg-4" >
                                    <div class="men-thumb-item">
                                        <img src="template/images/s5.jpg"  class="img-fluid" alt="" >
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="moviesingle.html" class="editContent" ><?php echo $product['name'];?></a>
                                        </h4>

                                        <div class="product_price">
                                            <div class="grid-price">
                                                <span class="money editContent" >«Слогана нет»</span>
                                            </div>
                                        </div>
                                        <ul class="stars">
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true" ></span></a></li>
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true" ></span></a></li>
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true" ></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true" ></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-o" aria-hidden="true" ></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>

<!-- Footer -->
<?php include ROOT.'/views/include/footer.php'; ?>

</body>
</html>
