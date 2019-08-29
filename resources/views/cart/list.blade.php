@extends('layouts.app')

@section('content')

    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="cart-product-list">
            @foreach($cart as $item)
            <div class="cart-product-list__item">
                <div class="cart-product__item__product-photo"><img src="{{$item->plant->photo}}" class="cart-product__item__product-photo__image"></div>
                <div class="cart-product__item__product-name">
                    <div class="cart-product__item__product-name__content"><a href="{{route('plant.show', [$item->plant->id])}}">{{$item->plant->title}}</a></div>
                </div>
                <div class="cart-product__item__cart-date">
                    <div class="cart-product__item__cart-date__content">{{$item->created_at}}</div>
                </div>
                <div class="cart-product__item__product-price"><span class="product-price__value">{{$item->plant->price}} рублей</span></div>
                <div><a href="{{route('cart.delete', ['id' => $item->id])}}" class="btn btn-red">Удалить</a></div>
            </div>
            @endforeach

            <div class="cart-product-list__result-item">
                <div class="cart-product-list__result-item__text">Итого</div>
                <div class="cart-product-list__result-item__value">{{$cart->sum('plant.price')}} рублей</div>
            </div>
        </div>
        <div class="content-footer__container">
            <div class="btn-buy-wrap"><a href="#" class="btn-buy-wrap__btn-link">Перейти к оплате</a></div>
        </div>
    </div>

    @include('layouts.content-bottom')
@endsection
