@extends("layout.layoutace")
@section("main")
    <h2> Danh sách sản phẩm</h2>
    <ul>
        @foreach($order->products as $item)
            <li>{{$item->name}} - ${{$item->pivot->price}}
                --qty{{$item->pivot->buy_qty}}</li>
        @endforeach
    </ul>
    <h2> Tổng tiền: {{$order->total}}</h2>
    @endsection
