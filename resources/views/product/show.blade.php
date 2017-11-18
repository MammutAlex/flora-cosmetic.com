@extends('layouts.app')

@section('content')
    <div class="space-60"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7 margin-b-40">
                <!-- master slider template -->
                <div class="ms-showcase2-template ms-showcase2-vertical">
                    <div class="master-slider ms-skin-default" id="masterslider">
                        <div class="ms-slide">
                            <img src="/plugins/masterslider/style/blank.gif" data-src="{{$active->photo}}"
                                 alt="{{$active->title}}"/>
                            <img class="ms-thumb" src="{{$active->photo}}" alt="thumb"/>
                        </div><!--end slide-->
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="item-description">
                    <h3>{{$active->title}}</h3>
                    <span class="price text-primary">&#8372;{{$active->price}}</span>
                    <p>{{$active->description}}</p>
                    <a href="#" class="btn btn-dark btn-xl btn-block">Купити</a>
                </div>
            </div>
        </div>
        <hr>
    </div>


    <div class="space-60"></div>
    <div class="container">
        <h4 class="margin-b-20">Схожі товари</h4>
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-3">
                    <div class="product-box">
                        <div class="product-thumb">
                            <img src="{{$active->photo}}" alt="" class="img-responsive">
                            <div class="product-overlay">
                                <span>
                                    <a class="btn btn-default" href="/products/{{$product->id}}">View Detail</a>
                                </span>
                            </div>
                        </div><!--/product-thumb-->
                        <div class="product-desc">
                            <span class="product-price pull-right">&#8372;{{$product->price}}</span>
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
        });

    </script>
@endsection