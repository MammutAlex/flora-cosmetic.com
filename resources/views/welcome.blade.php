@extends('layouts.app')

@section('content')
    <div class="space-80"></div>
    <div class="container">
        <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Останні товари</h3>
        <div class="row">
            @foreach($lastProducts as $product)
                <div class="col-sm-4 margin-b-30">
                    <a class="image-box" href="/products/{{$product->id}}">
                        <img src="{{$product->photo}}" alt="{{$product->title}}" class="img-responsive">
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
        <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Категорії</h3>
        <div class="product-slider owl-carousel owl-theme">
            @foreach($categories as $category)
                <div class="item">
                    <a class="category-box" href="/categories/{{$category->url}}">
                        <img src="{{$category->photo}}" alt="{{$category->name}}" class="img-responsive">
                        <div class="category-text">
                            <h4 class="text-uppercase">{{$category->name}}</h4>
                        </div>
                    </a><!--/category-box-->
                </div><!--/item-->
            @endforeach
        </div>
    </div>
    <div class="space-80"></div>
    <div class="split-section">
        <div class="split-image" style="background:url(images/bg-sm-1.jpg) "></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1 class="margin-b-20">Gaku table lamp</h1>
                    <p class="margin-b-20">
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="space-80"></div>
    <div class="container">
        <h3 class="text-uppercase font-400 title-font text-center margin-b-30">Featured products</h3>
        <div class="row">
            @foreach($products as $index=>$product)
                <div class="col-sm-6 col-md-3">
                    <div class="product-box">
                        <div class="product-thumb">

                            <img src="{{$product->photo}}" alt="{{$product->title}}" class="img-responsive">
                            <div class="product-overlay">
                                <span>
                                    <a class="btn btn-default" href="/products/{{$product->id}}">View Detail</a>
                                </span>
                            </div>
                        </div><!--/product-thumb-->
                        <div class="product-desc">
                            <span class="product-price pull-right">&#8372;{{$product->price_1}}</span>
                            <h5 class="product-name"><a href="/products/{{$product->id}}">{{$product->title}}</a></h5>
                        </div><!--/product-desc-->
                    </div>
                </div>
                @if($index === 3)
                    </div>
                    <div class="row">
                @endif
            @endforeach
        </div>
        <div class="text-center margin-b-50">
            <a href="/products" class="btn btn-link btn-lg">View all</a>
        </div>
    </div>

    <div class="testimonials">
        <div class="testi-slider owl-carousel owl-theme">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p>
                                " It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout.
                                " </p>
                            <h4>Steven Smith
                                <small>Boland customer</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection