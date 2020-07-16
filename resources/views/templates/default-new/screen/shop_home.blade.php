@php
/*
$layout_page = shop_home
*/ 
@endphp

@extends($templatePath.'.layout')
@php
$productsNew = $modelProduct->start()->getProductLatest()->setlimit(8)->getData();
$productsHot = $modelProduct->start()->getProductHot()->getData();
$productsBuild = $modelProduct->start()->getProductBuild()->getData();
$productsGroup = $modelProduct->start()->getProductGroup()->getData();
$three_categoriesTop = $modelCategory->start()->getCategoryTop()->setlimit(3)->getData();
@endphp

@section('center')
{{-- <div class="container-sm container product-list features">
    <div class="product-list-title">
        {{ trans('front.features_items') }}
    </div>
    <div class="container">
        <div class="row">
            @foreach ($productsNew as $key => $product_new)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                <div class="product-item">
                    <div class="product-main">
                        <div class="product-group">
                            @if ($product_new->price != $product_new->getFinalPrice() && $product_new->kind !=
                            SC_PRODUCT_GROUP)
                            <img src="{{ asset($templateFile.'/images/home/sale.png') }}" class="new" alt="" />
                            @elseif($product_new->kind == SC_PRODUCT_BUILD)
                            <img src="{{ asset($templateFile.'/images/home/bundle.png') }}" class="new" alt="" />
                            @elseif($product_new->kind == SC_PRODUCT_GROUP)
                            <img src="{{ asset($templateFile.'/images/home/group.png') }}" class="new" alt="" />
                            @endif
                        </div>
                        <div class="product-photo">
                            <a href="{{ $product_new->getUrl() }}">
                                <img src="{{ asset($product_new->getThumb()) }}" alt="{{ $product_new->name }}">
                            </a>
                        </div>
                        <div class="product-name">
                            <a href="{{ $product_new->getUrl() }}">
                                <h4>{{ $product_new->name }}</h4>
                            </a>
                        </div>
                        <div class="product-price">
                            {!! $product_new->showPrice() !!}
                        </div>
                        <div class="product-add-cart">
                            @if ($product_new->allowSale())
                            <a class="btn btn-default"
                                onClick="addToCartAjax('{{ $product_new->id }}','default')">
                                <i class="fa fa-shopping-cart"></i> <span>{{trans('front.add_to_cart')}}</span>
                            </a>
                            @else
                            &nbsp;
                            @endif
                        </div>

                    </div>
                    <div class="product-choose">
                        <ul class="nav nav-pills nav-justified">
                            <li>
                                <a onClick="addToCartAjax('{{ $product_new->id }}','wishlist')">
                                    <i class="fas fa-heart"></i> {{trans('front.add_to_wishlist')}}
                                </a>
                            </li>
                            <li>
                                <a onClick="addToCartAjax('{{ $product_new->id }}','compare')">
                                    <i class="fas fa-exchange-alt"></i> {{trans('front.add_to_compare')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-sm container product-list1 bkg-blue new">
    <div class="product-list-title">
        {{ trans('front.products_hot') }}
        <div class="arrow-slider-custom">
            <div class="next">
            </div>
            <div class="prev">
            </div>
        </div>
    </div>
    <div class="row product-list-items">
        <div class="slider">
            @foreach ($productsHot as $key => $product_hot)
            <div class="col-6 col-sm-6 col-md-3">
                <div class="product-item">
                    <div class="product-main">

                        <div class="product-photo">
                            <a href="{{ $product_hot->getUrl() }}">
                                <img src="{{ asset($product_hot->getThumb()) }}" alt="{{ $product_hot->name }}">
                            </a>
                        </div>
                        <div class="product-name">
                            <a href="{{ $product_hot->getUrl() }}">
                                <h4>{{ $product_hot->name }}</h4>
                            </a>
                        </div>
                        <div class="product-price">
                            {!! $product_hot->showPrice() !!}
                        </div>
                        <div class="product-add-cart">
                            @if ($product_hot->allowSale())
                            <a class="btn btn-default"
                                onClick="addToCartAjax('{{ $product_hot->id }}','default')">
                                <i class="fa fa-shopping-cart"></i> <span>{{trans('front.add_to_cart')}}</span>
                            </a>
                            @else
                            &nbsp;
                            @endif
                        </div>

                    </div>
                    <div class="product-choose">
                        <ul class="nav nav-pills nav-justified">
                            <li>
                                <a onClick="addToCartAjax('{{ $product_hot->id }}','wishlist')">
                                    <i class="fas fa-heart"></i> {{trans('front.add_to_wishlist')}}
                                </a>
                            </li>
                            <li>
                                <a onClick="addToCartAjax('{{ $product_hot->id }}','compare')">
                                    <i class="fas fa-exchange-alt"></i> {{trans('front.add_to_compare')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}
<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            @foreach($three_categoriesTop as $three_cate_top)
          {{--   {{dd($three_categoriesTop)}} --}}
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="{{ asset($three_cate_top->image) }}" alt="">
                        <div class="inner-text">
                            <h4>{{$three_cate_top->title}}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner Section End -->
<!-- Man Banner Section Begin -->
<section class="man-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="{{-- filter-control --}} product-list-title">
                   {{ trans('front.features_items') }}
                </div>
                <div class="product-slider owl-carousel">
                    @foreach ($productsNew as $key => $product_new)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ asset($product_new->image) }}" alt="{{ $product_new->name }}">
                                @if ($product_new->price != $product_new->getFinalPrice() && $product_new->kind !=
                                     SC_PRODUCT_GROUP)                                
                                  <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <a onClick="addToCartAjax('{{ $product_new->id }}','wishlist')">
                                      <i class="icon_heart_alt"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a onClick="addToCartAjax('{{ $product_new->id }}','default')" >
                                            <i class="icon_cart_alt"></i>
                                        </a>
                                    </li>
                                    <li class="quick-view"><a href="{{ $product_new->getUrl() }}">+{{trans('front.quick_view')}}</a></li>
                                   {{--  <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li> --}}
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="{{ $product_new->getUrl() }}">
                                    <h5>{{ $product_new->name }}</h5>
                                </a>
                                <div class="product-price">
                                   {!! $product_new->showPrice() !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<!-- Deal Of The Week Section Begin-->
{{-- <section class="deal-of-week set-bg spad" data-setbg="{{ asset($templateFile.'/images/time-bg.jpg')}}"> --}}
<section class="deal-of-week set-bg spad bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center ">
                <div class="section-title">
                    <h2>{{$deal_product->heading}}</h2>
                    <p>{{$deal_product->title}}</p>
                    <div class="product-price">
                        {{number_format($deal_product->deal_price)}}VND
                        <span>/ {{$deal_product->name_product}}</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="{{$deal_product->url}}" class="primary-btn">{{trans('front.shop')}}</a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img src="{{$deal_product->image}}" width="300" height="330" alt="">
            </div>
      </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

<!-- Man Banner Section Begin -->
<section class="man-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class=" product-list-title">
                    {{ trans('front.products_hot') }}
                </div>
                <div class="product-slider owl-carousel">
                    @foreach ($productsHot as $key => $product_hot)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ asset($product_hot->image) }}" alt="{{ $product_hot->name }}">
                                @if ($product_hot->price != $product_hot->getFinalPrice() && $product_hot->kind !=
                                     SC_PRODUCT_GROUP)                                
                                  <div class="sale">Sale</div>
                                @endif
                                <div class="icon">
                                    <a onClick="addToCartAjax('{{ $product_hot->id }}','wishlist')">
                                      <i class="icon_heart_alt"></i>
                                    </a>
                                </div>
                                <ul>
                                    <li class="w-icon active">
                                        <a onClick="addToCartAjax('{{ $product_hot->id }}','default')" >
                                            <i class="icon_cart_alt"></i>
                                        </a>
                                    </li>
                                    <li class="quick-view"><a href="{{ $product_hot->getUrl() }}">+{{trans('front.quick_view')}}</a></li>
                                   {{--  <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li> --}}
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="{{ $product_hot->getUrl() }}">
                                    <h5>{{ $product_hot->name }}</h5>
                                </a>
                                <div class="product-price">
                                   {!! $product_hot->showPrice() !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<!-- Instagram Section Begin -->
<div class="instagram-photo">
    @if($instagram_photos->count()>0)
        @foreach($instagram_photos as $photo)
        <div class="insta-item set-bg" data-setbg="{{$photo->image}}">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="{{$photo->url}}">{{$photo->title}}</a></h5>
            </div>
        </div>
        @endforeach
    @endif
</div>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>{{trans('front.news')}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($list_news as $news)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="{{$news->image}}" alt="{{$news->title}}">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                {{$news->created_at->format('d-m-Y')}}
                            </div>
                        </div>
                        <a href="{{ $news->getUrl() }}">
                            <h4>{{$news->title}}</h4>
                        </a>
                        <p>{{$news->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
{{--         <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="{{ asset($templateFile.'/images/icon-1.png')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shipping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="{{ asset($templateFile.'/images/icon-2.png')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery On Time</h6>
                            <p>If good have prolems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="{{ asset($templateFile.'/images/icon-3.png')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Secure Payment</h6>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- Latest Blog Section End -->
<!-- Partner Logo Section Begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            @foreach($partners as $partner)
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{$partner->image}}" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->


<!-- Partner Logo Section End -->
<script>
        var strDate = '{{$deal_product->time_deal}}'
        
 </script>
@endsection

@push('styles')
@endpush

@push('scripts')

@endpush
