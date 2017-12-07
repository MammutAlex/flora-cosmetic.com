@extends('layouts.app')

@section('title',$active->title)
@section('meta')
    <meta name="description" content="{{$product->small_description}}">
@endsection
@section('content')
    <div class="space-60"></div>
    <div class="container" itemscope itemtype="http://schema.org/Product">
        <div class="row">
            <div class="col-sm-7 margin-b-40">
                <!-- master slider template -->
                <div class="ms-showcase2-template ms-showcase2-vertical">
                    <div class="master-slider ms-skin-default" id="masterslider">
                        <div class="ms-slide">
                            <img src="/plugins/masterslider/style/blank.gif" data-src="/{{$active->photo}}"
                                 alt="{{$active->title}}"/>
                            <img itemprop="image" class="ms-thumb" src="/{{$active->photo}}" alt="thumb"/>
                        </div>
                        @foreach($active->images as $image)
                            <div class="ms-slide">
                                <img src="/{{$image}}"
                                     data-src="/{{$image}}"
                                     alt="{{$active->title}}">
                                <img class="ms-thumb" src="/{{$image}}" alt="thumb"/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="item-description">
                    <h3 itemprop="name">{{$active->title}}</h3>
                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span class="price text-primary" itemprop="price">&#8372;{{$active->price_1}}</span>
                    </span>
                    <p itemprop="description">{!! $active->description !!}</p>
                    <hr>
                    <form role="form" id="buy-form" method="POST" action="{{ route('product',$active->id) }}">
                        {{ csrf_field() }}
                        <input name="type" id="type" value="buy" type="hidden">
                        @if (session('success'))
                            <div class="testi-box">
                                <p>
                                    {{ session('success') }}
                                </p>
                            </div>
                        @endif
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Телефон</label>
                            <input type="text" name="phone" value="+380 " class="form-control" id="phone">
                        </div>
                        <div class="form-group{{ $errors->has('config') ? ' has-error' : '' }}">
                            <label for="product">Параметры</label>
                            <select class="form-control" id="product" name="config">
                                @if($active->price_1)
                                    <option value="1" selected>{{$active->config_1}} -
                                        &#8372;{{$active->price_1}}</option>
                                @endif
                                @if($active->price_2)
                                    <option value="2">{{$active->config_2}} - &#8372;{{$active->price_2}}</option>
                                @endif
                                @if($active->price_3)
                                    <option value="3">{{$active->config_3}} - &#8372;{{$active->price_3}}</option>
                                @endif
                                @if($active->price_4)
                                    <option value="4">{{$active->config_4}} - &#8372;{{$active->price_4}}</option>
                                @endif
                                @if($active->price_5)
                                    <option value="5">{{$active->config_5}} - &#8372;{{$active->price_5}}</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark btn-xl btn-block">
                            Купить в один клик
                        </button>
                        <button type="button" class="btn btn-default btn-xl btn-block" id="addToBasket">
                            Добавить в корзину
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>


    <div class="space-60"></div>
    <div class="container">
        <h4 class="margin-b-20">Похожие товары</h4>
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-3">
                    <div class="product-box">
                        <div class="product-thumb">
                            <img src="/{{$product->photo}}" alt="" class="img-responsive">
                            <div class="product-overlay">
                                <span>
                                    <a class="btn btn-default"
                                       href="/products/{{$product->id}}">Посмотреть подробнее</a>
                                </span>
                            </div>
                        </div><!--/product-thumb-->
                        <div class="product-desc">
                            <span class="product-price pull-right">&#8372;{{$product->price_1}}</span>
                            <h5 class="product-name"><a href="/products/{{$product->id}}">{{$product->title}}</a></h5>
                        </div><!--/product-desc-->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script src="/plugins/masterslider/masterslider.min.js"></script>
    <script src="/plugins/jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var slider = new MasterSlider();
            slider.control('scrollbar', {dir: 'h'});
            slider.control('thumblist', {
                autohide: false,
                dir: 'v',
                arrows: false,
                align: 'left',
                width: 127,
                height: 84,
                margin: 5,
                space: 5,
                hideUnder: 300
            });
            slider.setup('masterslider', {
                width: 540,
                height: 586,
                space: 5
            });
            var options = {
                placeholder: '+380 __ ___-__-__',
                'translation': {
                    N: {pattern: /[0-9]/}
                },
                onKeyPress: function (cep) {
                    if (cep.length <= 5 || cep === '+380 0') {
                        $('#phone').val('+380 ');
                    }
                }
            };
            $('#phone').mask('+380 NN NNN-NN-NN', options);
            $('#addToBasket').click(function () {
                $('#type').val('changed Value');
                $('#buy-form').submit();
            })
        });

    </script>
@endsection