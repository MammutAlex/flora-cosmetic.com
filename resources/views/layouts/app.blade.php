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
        <div class="pull-right">
            <ul class="right-icon-nav nav navbar-nav list-inline">
                <li class="cart-nav">
                    <a href="javascript:void(0)" data-toggle="offcanvas" data-target="#cartNavmenu" data-canvas="body">
                        <i class="material-icons">shopping_cart</i>
                        @if(isset($basketList))
                            <span class="label label-primary">{{$basketList->buys()->count()}}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
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

<aside id="cartNavmenu" class="navmenu navmenu-default navmenu-fixed-right offcanvas">

    <div class="cart-inner">
        <h4>Корзина @if(isset($basketList))({{$basketList->buys()->count()}})@endif</h4>
        <hr>
        @if(isset($basketList))
            <ul class="list-unstyled cart-list margin-b-30">
                @foreach($basketList->buys as $buy)
                    <li class="clearfix">
                        <div class="cart-thumb">
                            <a href="/products/{{$buy->product->id}}">
                                <img src="/{{$buy->product->photo}}" alt="{{$buy->product->title}}"
                                     class="img-responsive" width="60">
                            </a>
                        </div>
                        <div class="cart-content">
                            <h5>
                                <a href="/products/{{$buy->product->id}}">
                                    {{$buy->product->title}}<br>
                                    {{$buy->product['config_'.$buy->config_id]}}
                                </a>
                            </h5>
                            <p>
                                <span class="price">&#8372;{{$buy->product['price_'.$buy->config_id]}}</span>
                                x {{$buy->amount}}
                            </p>
                        </div>
                    </li>
                @endforeach
                <li>
                    <div class="text-center">
                        <a href="{{route('cart')}}" class="btn btn-primary">Оформить заказ</a>
                    </div>
                </li>
            </ul>
        @else
            В корзине ничего нет
        @endif
    </div>
</aside>
<!--===========================End Header===========================-->
@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 margin-b-30">
                <h4>О нас</h4>
                <p>
                    Косметика изготавливается индивидуально для Вашей кожи, из натуральных ингредиентов, которые дают заметный результат без привыкания! 
                    Попробуйте, что б убедиться самим
                </p>
                <ul class="list-inline socials">
                    <li><a href="https://www.facebook.com/flora.naturalcosm"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/flora.naturalcosm"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Последние товары</h4>
                <ul class="list-unstyled latest-news">
                    @foreach($lastProducts as $product)
                        <li class="clearfix">
                            <div class="pull-left">
                                <a href="/products/{{$product->id}}">
                                    <img src="/{{$product->photo}}" alt="{{$product->title}}" width="50"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="content">
                                <h5><a href="/products/{{$product->id}}">{{$product->title}}</a></h5>
                                <span><a href="/products/{{$product->id}}">{{substr($product->small_description,0,30)}}
                                        ...</a></span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Страницы</h4>
                <ul class="list-unstyled link-list">
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
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Контакти</h4>
                <p class="lead">
                    <br>+380 66 524-69-02
                    <br>+380 96 019-27-57
                </p>
                <p class="lead">info@flora-cosmetic.com</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container text-center">
        <span>&copy; Copyright 2017. All Right Reserved. By <a href="https://alex-kovalchuk.site" target="_blank">mammut</a></span>
    </div>
</footer>
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

@yield('script')
</body>
</html>
