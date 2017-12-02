<b>Користувач зробив замовлення</b>
Імя: {{$backet->name}}
Телефон: <a href="tel:{{str_replace([' ','-'],'',$backet->phone)}}">{{$backet->phone}}</a>
Товари:
@foreach($backet->buys as $product)
    ___
    Назва: {{$product->product->title}}- {{$product->product['config_'.$product->config_id]}}
    Ціна: &#8372;{{$product->product['price_'.$product->config_id]}}
    Кількість: {{$product->amount}}
@endforeach

Коментарій: {{$backet->comment}}

Загальна сума: &#8372;{{$backet->price}}