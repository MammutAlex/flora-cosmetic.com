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
        @if (!session('success'))
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
                                <img src="/{{$product->product->photo}}" alt="{{$product->product->title}}" width="90">
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
                                <h4>{{$product->amount}}</h4>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!--end cart table-->
            <div class="space-10"></div>
            <ul class="list-unstyled text-right cart-subtotal-list">
                <li>
                    Загальна сума
                    <span class="lead">&#8372;{{$basket->price}}</span>
                </li>
            </ul>
            <hr>
        @endif
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <div class="text-right">
                    <form role="form" id="buy-form" method="POST" action="{{ route('cart') }}">
                        {{ csrf_field() }}
                        <input name="type" id="type" value="buy" type="hidden">
                        @if (session('success'))
                            <div class="testi-box">
                                <p>
                                    {{ session('success') }}
                                </p>
                            </div>
                        @endif
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="phone">Імя</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone">Телефон</label>
                            <input type="text" name="phone" value="+380 " class="form-control" id="phone">
                        </div>
                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment">Коментарій</label>
                            <textarea class="form-control" rows="3" name="comment" id="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg">
                            Купити
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="space-60"></div>
@endsection
@section('script')
    <script src="/plugins/masterslider/masterslider.min.js"></script>
    <script src="/plugins/jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#phone').mask('+380 NN NNN-NN-NN', {
                placeholder: '+380 __ ___-__-__',
                'translation': {
                    N: {pattern: /[0-9]/}
                },
                onKeyPress: function (cep) {
                    if (cep.length <= 5 || cep === '+380 0') {
                        $('#phone').val('+380 ');
                    }
                }
            });
            $('#addToBasket').click(function () {
                $('#type').val('changed Value');
                $('#buy-form').submit();
            })
        });

    </script>
@endsection