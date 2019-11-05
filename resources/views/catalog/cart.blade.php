@extends('layouts.app',['phones'=>Config::get('common.phones'), 'meta'=>Config::get('common.meta.catalog')])

@section('content')
    <div class="container">
        <div class="row cart">
            @php
                $totalPrice = 0;
                $totalCount = 0;
            @endphp
            <div class="col-xl-8">
                <div class="items">
                    @foreach ($items as $id => $item)
                        <div class="item" title="{{$item->name}}" id="item-{{$item->id}}">
                            <div class="image" style="background-image: url({{ asset("img/items/".$item->image) }})"  alt="item"></div>
                            <div class="name">{{$item->name}}</div>
                            <div class="item-add">
                                <div>
                                    @if ($item->sale > 0)
                                        <span class="item-sale">{{ round($item->price * $coef, 2 ) }}</span>  
                                        <span id="item-price-{{$id}}">{{round($item->sale * $coef, 2 ) }}</span>
                                     @else
                                         <span id="item-price-{{$id}}">{{ round($item->price * $coef, 2 )}}</span>  
                                     @endif
                                </div> 
                                <div class="count">
                                    <div class="count-btn" onclick="changeItemCount(-1, {{ $id }})">-</div> 
                                    <div class="count-info"> <span id="item-count-{{$id}}">{{$counts[$item->id]}}</span></div>
                                    <div class="count-btn" onclick="changeItemCount(1, {{ $id }})">+</div>
                                </div>
                                <div class="item-total">
                                    <span id="item-total-{{$id}}">
                                        {{round( $item->price * $coef * $counts[$item->id], 2)}}
                                    </span> руб.
                                </div>
                            </div>
                            <div class="item-remove" onclick="removeItemFromCart({{$item->id}})">
                            </div>
                        </div>
                        @php
                            $totalPrice += $item->price * $counts[$item->id];
                            $totalCount += $counts[$item->id];
                        @endphp
                    @endforeach
                </div>                
            </div>
            <div class="col-xl-4">
                <form action="{{route('order')}}" method="post" class="order" onsubmit="sendOrder(event, this)">
                    @csrf
                    <p><input type="text" name="name" min="4" placeholder="Ваше имя" required></p>
                    <p><span class="phone-prefix">+375</span><input type="text" class="phone" name="phone" placeholder="Номер телефона" required oninput="onInputPhoneNumber(event, this)"></p>
                    <p><input type="submit" value="Оформить заказ" class="button" id="order"></p>
                    <div class="count">В корзине <span id="order-count">{{$totalCount}}</span> товаров</div>
                    <hr>
                    <p class="total"> На сумму: <span id="order-price">{{$totalPrice}}</span> руб.</p>
                </form>
            </div>
        </div>
    </div>
@endsection