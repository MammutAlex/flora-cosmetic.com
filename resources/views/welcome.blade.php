@extends('layouts.app')

@section('title','Главная')
@section('meta')
    <meta name="description" content="Натуральная косметика ручной работы, готовится индивидуально, из природных компонентов, бережно ухаживает за кожей и волосами. Попробуйте, чтоб убедились сами! С любовью, ФЛОРА">
@endsection
@section('content')
    <!--start master slider-->
    <div class="clearfix"></div>
    <div class="slider-main" style="overflow: hidden;">
        <!-- Master Slider -->
        <div class="master-slider ms-skin-default" id="masterslider">
        @foreach($slides as $slide)
            @if($slide->type == 1)
                <!-- slide 1 -->
                    <div class="ms-slide slide-1" data-delay="8">
                        <!-- slide background -->
                        <img src="plugins/masterslider/style/blank.gif" data-src="/{{$slide->photo}}"
                             alt="{{$slide->title}}"/>
                        <h3 class="ms-layer full-width title1 white-color text-center"
                            style="left:0px;top: 180px;"
                            data-type="text"
                            data-effect="fade"
                            data-duration="1800"
                            data-delay="0">{{$slide->title}}</h3>
                        <h5 class="ms-layer sub-title2 white-color full-width text-center"
                            style="left:0px; top: 260px;"
                            data-type="text"
                            data-effect="fade"
                            data-duration="1800"
                            data-delay="0">{{$slide->text}}</h5>
                    </div>
                    <!-- end of slide -->
            @elseif($slide->type == 2)
                <!-- slide 2 -->
                    <div class="ms-slide slide-2" data-delay="6">

                        <!-- slide background -->
                        <img src="plugins/masterslider/style/blank.gif" data-src="/{{$slide->photo}}"
                             alt="{{$slide->title}}"/>
                        <h3 class="ms-layer full-width title1 text-center"
                            style="left:0px;top: 90px;"
                            data-type="text"
                            data-delay="0"
                            data-duration="1000"
                            data-effect="fade">{{$slide->title}}</h3>
                        <h5 class="ms-layer sub-title2 full-width text-center"
                            style="left:0px; top: 160px;"
                            data-type="text"
                            data-effect="fade"
                            data-duration="4500"
                            data-delay="0">{{$slide->text}}</h5>
                    </div>
                    <!-- end of slide -->
            @elseif($slide->type == 3)
                <!-- slide 3 -->
                    <div class="ms-slide slide-3" data-delay="8">
                        <!-- slide background -->
                        <img src="plugins/masterslider/style/blank.gif" data-src="/{{$slide->photo}}"
                             alt="{{$slide->title}}"/>
                        <h3 class="ms-layer title1 text-left"
                            style="left:15px;top: 190px;"
                            data-type="text"
                            data-effect="fade"
                            data-duration="1800"
                            data-delay="0">{{$slide->title}}</h3>
                        <h5 class="ms-layer sub-title2 text-left"
                            style="left:15px; top: 260px;"
                            data-type="text"
                            data-effect="fade"
                            data-duration="1800"
                            data-delay="0">{{$slide->text}}</h5>
                    </div>
                    <!-- end of slide -->
                @endif
            @endforeach
        </div>
    </div>
    <!-- end Master Slider -->
    <div class="space-80"></div>
    <div class="container">
        <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Новинки</h3>
        <div class="row">
            @foreach($lastProducts as $product)
                <div class="col-sm-4 margin-b-30">
                    <a class="image-box" href="/products/{{$product->id}}">
                        <img src="/{{$product->photo}}" alt="{{$product->title}}" class="img-responsive">
                        <div class="img-overlay">
                            <h1>{{$product->title}}</h1>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="space-50"></div>
    <div class="container">
        <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Категории</h3>
        <div class="product-slider owl-carousel owl-theme">
            @foreach($categories as $category)
                <div class="item">
                    <a class="category-box" href="/categories/{{$category->url}}">
                        <img src="/{{$category->photo}}" alt="{{$category->name}}" class="img-responsive">
                        <div class="category-text">
                            <h4 class="text-uppercase">{{$category->name}}</h4>
                        </div>
                    </a><!--/category-box-->
                </div><!--/item-->
            @endforeach
        </div>
    </div>
    <div class="space-80"></div>

    <div class="testimonials">
        <div class="testi-slider owl-carousel owl-theme">
            @foreach($reviews as $review)
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <p>"{{$review->text}}"</p>
                                <h4>{{$review->name}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script src="plugins/masterslider/masterslider.min.js"></script>
    <script>
        (function ($) {
            "use strict";
            var slider = new MasterSlider();
            // adds Arrows navigation control to the slider.

            slider.control('timebar', {insertTo: '#masterslider'});
            slider.control('bullets');

            slider.setup('masterslider', {
                width: 1170, // slider standard width
                height: 510, // slider standard height
                space: 0,
                layout: 'fullwidth',
                loop: true,
                preload: 0,
                instantStartLayers: true,
                autoplay: true
            });
        })(jQuery);
    </script>
@endsection