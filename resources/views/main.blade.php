@extends('layouts.app')

@section('content')
    <div class="content-middle">
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Последние товары</div>
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
        <div class="content-main__container">
            <div class="products-columns">
                @foreach($plants as $plant)
                    <div class="products-columns__item">
                        <div class="products-columns__item__title-product"><a href="{{route('plant.show', ['id' => $plant->id])}}" class="products-columns__item__title-product__link">{{$plant->title}}</a></div>
                        <div class="products-columns__item__thumbnail"><a href="{{route('plant.show', ['id' => $plant->id])}}" class="products-columns__item__thumbnail__link"><img src="{{$plant->photo}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                        <div class="products-columns__item__description"><span class="products-price">{{$plant->price}} руб.</span><a href="{{route('plant.buy', ['id' => $plant->id])}}" class="btn btn-blue">Купить</a></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-footer__container">
            <ul class="page-nav">
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">1</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">2</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">3</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">4</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link">5</a></li>
                <li class="page-nav__item"><a href="#" class="page-nav__item__link"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="content-bottom"></div>
@endsection

