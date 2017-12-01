@extends('layouts.app')

@section('content')
    <!--page header-->
    <div class="page-breadcrumb margin-b-60">
        <div class="container">
            <h4>Оформлення покупки</h4>
        </div>
    </div>
    <!--page header-->

    <div class="space-60"></div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered cart-table">
                <thead>
                <tr>
                    <th></th>
                    <th>Назва</th>
                    <th>Ціна</th>
                    <th>Кількість</th>
                </tr>
                </thead>
                <tbody>
                @foreach($basket->buys as $product)
                    <tr>
                        <td class="item-thumb">
                            <img src="{{$product->product->photo}}" alt="{{$product->product->title}}" width="90">
                        </td>
                        <td class="item-name">
                            <h4>
                                <a href="/products/{{$product->product->id}}">
                                    {{$product->product->title}}<br>
                                    {{$product->product['config_'.$product->config_id]}}
                                </a>
                            </h4>
                        </td>
                        <td class="item-price">
                            <h4>&#8372;{{$product->product['price_'.$product->config_id]}}</h4>
                        </td>
                        <td class="item-count" style="width: 120px">
                            <div class="count-input">
                                <a class="incr-btn" data-action="decrease" href="#">–</a>
                                <input class="quantity" type="text" value="{{$product->amount}}">
                                <a class="incr-btn" data-action="increase" href="#">+</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!--end cart table-->
        <div class="space-10"></div>
        <hr>
        <ul class="list-unstyled text-right cart-subtotal-list">
            <li>
                Загальна сума
                <span class="lead"></span>
            </li>
        </ul>
        <hr>
        <div class="text-right">
            <a href="#" class="btn btn-dark btn-lg">Купити</a>
        </div>
    </div>
    <div class="space-60"></div>
@endsection