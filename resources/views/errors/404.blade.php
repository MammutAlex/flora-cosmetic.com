<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') Флора косметика</title>

    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/assets/owl.theme.default.css" rel="stylesheet">
    <link href="/plugins/icheck/skins/minimal/blue.css" rel="stylesheet">
    <!--master slider-->
    <link href="/plugins/masterslider/style/masterslider.css" rel="stylesheet">
    <link href="/plugins/masterslider/skins/default/style.css" rel='stylesheet'>
    <!--template css-->
    <link href="/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--pre-loader-->
<div id="preloader"></div>
<!--pre-loader-->
<!--back to top-->
<a href="#" class="scrollToTop"><i class="material-icons 48dp">keyboard_arrow_up</i></a>
<!--back to top end-->
<!--===========================start Header===========================-->
<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top yamm sticky-header">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/images/logo1.png" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{isActiveRoute('index')}}">
                    <a href="{{route('index')}}">Главная</a>
                </li>
                <li class="{{areActiveRoutes(['products','product'])}}">
                    <a href="{{route('products')}}">Каталог товаров</a>
                </li>
                <li class="{{areActiveRoutes(['test'])}}">
                    <a href="{{route('test')}}">Определение типа кожи</a>
                </li>
                <li class="{{areActiveRoutes(['delivery'])}}">
                    <a href="{{route('delivery')}}">Доставка и оплата</a>
                </li>
                <li class="{{areActiveRoutes(['contacts'])}}">
                    <a href="{{route('contacts')}}">Контакты</a>
                </li>

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<!--===========================End Header===========================-->

<div class="container text-center">
    <div class="error-404">
        <i class="material-icons">error</i>
        <h4 class="text-uppercase">К сожалению, страница не найдена.</h4>
        <p>
            Похоже, в этом месте ничего не было найдено. Нажмите ссылку ниже, чтобы вернуться на главную
        </p>
        <a href="{{route('index')}}" class="btn btn-link">Перейти на главную <i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>
<!--/footer-->
<script src="/plugins/jquery/dist/jquery.min.js"></script>
<script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/pace/pace.min.js"></script>
<script src="/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script src="/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="/plugins/sticky/jquery.sticky.js"></script>
<script src="/plugins/icheck/icheck.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/boland.custom.js"></script>
</body>
</html>
