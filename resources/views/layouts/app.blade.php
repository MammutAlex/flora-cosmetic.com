<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
            <a class="navbar-brand" href="/"><img src="/images/logo.png" alt=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{isActiveRoute('index')}}">
                    <a href="/">Головна</a>
                </li>

                <li class="dropdown {{isActiveRoute('categories')}}">
                    <a href="#"
                       class="dropdown-toggle"
                       data-toggle="dropdown"
                       role="button"
                       aria-haspopup="true"
                       aria-expanded="false">
                        Категорії <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li>
                                <a href="/categories/{{$category->url}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="{{areActiveRoutes(['products','product'])}}">
                    <a href="/products">Товари</a>
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
                                <img src="{{$buy->product->photo}}" alt="{{$buy->product->title}}" class="img-responsive" width="60">
                            </a>
                        </div>
                        <div class="cart-content">
                            <span class="close"><i class="fa fa-times"></i></span>
                            <h5><a href="/products/{{$buy->product->id}}">{{$buy->product->title}}</a></h5>
                            <p><span class="price">&#8372;{{$buy->price}}</span></p>
                        </div>
                    </li>
                @endforeach
                <li>
                    <div class="text-center">
                        <a href="checkout.html" class="btn btn-default">Checkout</a>
                        <a href="cart.html" class="btn btn-primary">View Cart</a>
                    </div>
                </li>
            </ul>
        @else
            Ви ще нічого не добавили у корзину
        @endif
    </div>
</aside>
<!--===========================End Header===========================-->
@yield('content')
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 margin-b-30">
                <h4>Про нас</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.
                </p>
                <ul class="list-inline socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Останні товари</h4>
                <ul class="list-unstyled latest-news">
                    @foreach($lastProducts as $product)
                        <li class="clearfix">
                            <div class="pull-left">
                                <a href="/products/{{$product->id}}">
                                    <img src="{{$product->photo}}" alt="{{$product->title}}" width="50"
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
                <h4>Сторінки</h4>
                <ul class="list-unstyled link-list">
                    <li><a href="/">Головна</a></li>
                    <li><a href="/products">Товари</a></li>
                </ul>
            </div><!--/col-->
            <div class="col-md-3 margin-b-30">
                <h4>Контакти</h4>
                <p class="lead">
                    <br>1800 443-5493
                </p>
                <p class="lead">support@boland.com</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container text-center">
        <span>&copy; Copyright 2017. All Right Reserved. By <a href="https://alex-kovalchuk.site/" target="_blank">mammut</a></span>
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
