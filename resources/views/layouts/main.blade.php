
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard | Nifty - Responsive admin template.</title>
        

<!--STYLESHEET-->
<!--=================================================-->
<!--jQuery [ REQUIRED ]-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--Open Sans Font [ OPTIONAL ] -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


<!--Bootstrap Stylesheet [ REQUIRED ]-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css"/>

<!--Nifty Stylesheet [ REQUIRED ]-->
<link href="css/nifty.min.css" rel="stylesheet">


<!--Font Awesome [ OPTIONAL ]-->
<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


<!--Animate.css [ OPTIONAL ]-->
<link href="plugins/animate-css/animate.min.css" rel="stylesheet">


<!--Morris.js [ OPTIONAL ]-->
<link href="plugins/morris-js/morris.min.css" rel="stylesheet">


<!--Switchery [ OPTIONAL ]-->
<link href="plugins/switchery/switchery.min.css" rel="stylesheet">


<!--Bootstrap Select [ OPTIONAL ]-->
<link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">


<!--Demo script [ DEMONSTRATION ]-->
<link href="css/demo/nifty-demo.min.css" rel="stylesheet">




<!--SCRIPT-->
<!--=================================================-->

<!--Page Load Progress Bar [ OPTIONAL ]
<link href="plugins/pace/pace.min.css" rel="stylesheet">
<script src="plugins/pace/pace.min.js"></script>
-->


<!--

REQUIRED
You must include this in your project.

RECOMMENDED
This category must be included but you may modify which plugins or components which should be included in your project.

OPTIONAL
Optional plugins. You may choose whether to include it in your project or not.

DEMONSTRATION
This is to be removed, used for demonstration purposes only. This category must not be included in your project.

SAMPLE
Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


Detailed information and more samples can be found in the document.

-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    </head>

    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

    <body>
        <div id="container" class="effect mainnav-lg">
            <script type="text/javascript">
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if ($(window).width() > 900) {
                $('header').addClass('fixed');
                $('body').addClass('with_fixed');

            }
        } else {
            $('header').removeClass('fixed');
            $('body').removeClass('with_fixed');
        }
    });
</script>
<header  id="navbar-container"  class="container-fluid ">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <a href="" class="logo pull-left">
                        <img src="images/logo.png" alt="" />
                    </a>
                    <div class="title_block_user pull-left text-left">
                        <p class="title">Покупатель</p>
                        <p class="name"><strong>Василий Коломойский</strong> <span class="tel">+7 (543)854 45 85</span></p>
                        <div class="rate_block iblock">
                            Рейтинг:
                            <div class="rating-select iblock">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </div>
                            &nbsp;
                            (<a href="#">7 отзывов</a>)

                            <p>Сделок: 8</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="login_block text-right pull-right col-md-3">
                Войти как 
                <a href="#" data-toggle="dropdown" class="btn-link dropdown-toggle text-right">
                    продавец
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">
                    <!-- Dropdown heading  -->
                    <div class="pad-all bord-btm">
                        Вход
                    </div>
                    <div class="container-fluid mgt20">
                        <form action="">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" placeholder="Имя" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <input type="password" placeholder="Пароль" class="form-control">
                                </div>
                            </div>
                            <input class="btn btn-success" type="submit" value="Вход" />
                        </form>
                    </div>
                    <!-- Dropdown footer -->
                    <div class="pad-all text-right">
                        <a href="#">Я забыл пароль</a>
                    </div>
                </div>
            </div>
        </div>
       <div class="row">
            <div class="col-md-8 pad-no">
                <ul class="nav ">
                    <li class="pull-left pad-no text-center">
                        <a href="">Заказы</a>
                        <ul>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                            <li>
                                <a href="">Заказы sdfsdsds</a>
                            </li>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pull-left pad-no text-center">
                        <a href="">Споры</a>
                        <ul>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pull-left pad-no text-center">
                        <a href="">Деньги</a>
                        <ul>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                            <li>
                                <a href="">Заказы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pull-left pad-no text-center">
                        <a href="">Отзывы</a>
                    </li>
                    <li class="pull-left pad-no text-center">
                        <a href="">Настройки</a>
                    </li>
                </ul>
                
            </div>
            <div class="col-md-4 text-right">
                <form class="" action="">
                    <div class="input-group mar-btm">
                        <input type="text" placeholder="Введите URL объявления" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-danger btn-labeled fa fa-shopping-cart" type="button">Заказать</button>
                        </span>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</header> 
            <section class="container-fluid">
            @yield('content')
            </section>
            <button id="scroll-top" class="btn">
    <i class="fa fa-chevron-up"></i>
</button>
<footer class="container-fluid ">
    <div class="container">
        <ul class="nav_row">
            <li><a href="#">Партнерам</a></li>
            <li><a href="#">Правовая база</a></li>
            <li><a href="#">Мобильные приложения</a></li>
            <li><a href="#">Модули для магазинов</a></li>
            <li><a href="#">Подпишитесь на открытие!</a></li>
        </ul>
        <p>
            Услуги будут предоставляться организацией с лицензией на осуществление банковских операций. В настоящий момент услуги не предоставляются.
        </p>
    </div>
</footer>
</div>

<!--===================================================-->
<!-- END SETTINGS -->


<!--JAVASCRIPT-->
<!--=================================================-->




<!--BootstrapJS [ RECOMMENDED ]-->
<script src="js/bootstrap.min.js"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="plugins/fast-click/fastclick.min.js"></script>


<!--Nifty Admin [ RECOMMENDED ]-->
<script src="js/nifty.min.js"></script>


<!--Morris.js [ OPTIONAL ]-->
<script src="plugins/morris-js/morris.min.js"></script>
<script src="plugins/morris-js/raphael-js/raphael.min.js"></script>


<!--Sparkline [ OPTIONAL ]-->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>


<!--Skycons [ OPTIONAL ]-->
<script src="plugins/skycons/skycons.min.js"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="plugins/switchery/switchery.min.js"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>


<!--Demo script [ DEMONSTRATION ]-->
<script src="js/demo/nifty-demo.min.js"></script>


<!--Specify page [ SAMPLE ]-->
<script src="js/demo/dashboard.js"></script>
<link rel="stylesheet" href="plugins/dropzone/dropzone.css">
<script src="plugins/dropzone/dropzone.min.js"></script>


<!--

REQUIRED
You must include this in your project.

RECOMMENDED
This category must be included but you may modify which plugins or components which should be included in your project.

OPTIONAL
Optional plugins. You may choose whether to include it in your project or not.

DEMONSTRATION
This is to be removed, used for demonstration purposes only. This category must not be included in your project.

SAMPLE
Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


Detailed information and more samples can be found in the document.

-->




    </body>
</html>