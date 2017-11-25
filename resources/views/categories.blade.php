@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>{{$category->name}}</h4>
        </div>
    </div>
    <!--page header-->


    <div class="container">
        <div class="row">
            <div class="col-sm-3 filter-row">
                <div class="sidebar-widget margin-b-40">
                    <h4>Категорії</h4>
                    <ul class="list-unstyled">

                        <li class="clearfix">
                            <span class="pull-right">({{$category->products()->count()}})</span>
                            <a @if($activeSubcategory=== null)style="color: #26bbad" @endif
                            href="/categories/{{$category->url}}">
                                Усі
                            </a>
                        </li>
                        @foreach($category->subcategories as $subcategory)
                            <li class="clearfix">
                                <span class="pull-right">({{$subcategory->products()->count()}})</span>
                                <a @if($subcategory->url === $activeSubcategory)style="color: #26bbad" @endif
                                href="/categories/{{$category->url}}/{{$subcategory->url}}">
                                    {{$subcategory->title}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!--/sidebar widget-->
            </div>
            <div class="col-sm-9">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xs-12">
                            <div class="media shop-list-media">
                                <div class="media-left">
                                    <a href="/products/{{$product->id}}">
                                        <img src="{{$product->photo}}" alt="{{$product->title}}" class="img-responsive">
                                    </a>
                                </div><!--/thumb-->
                                <div class="media-body">
                                    <h3><a href="/products/{{$product->id}}">{{$product->title}}</a></h3>
                                    <h1>&#8372;{{$product->price_1}}</h1>
                                    <p>{!!$product->small_description!!}</p>
                                    <a href="/products/{{$product->id}}" class="btn btn-default">View Detail</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
                <div class="space-30"></div>
                <nav aria-label="Page navigation" class="text-right margin-b-30">
                    {{$products->links()}}
                </nav>
            </div>
        </div>
    </div>
@endsection