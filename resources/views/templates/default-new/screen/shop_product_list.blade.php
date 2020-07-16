@php
/*
$layout_page = product_list
$itemsList: paginate
Use paginate: $itemsList->appends(request()->except(['page','_token']))->links()
$products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
*/ 

$categories = $modelCategory->start()->getList(['status' => 1]);
$categoriesTop = $modelCategory->start()->getCategoryTop()->getData();

@endphp

@extends($templatePath.'.layout')

@section('center')
{{-- <div class="features_items">
    <h2 class="title-page">{{ $title }}</h2>

    @isset ($itemsList)
    @if($itemsList->count())
    <div class="row item-folder">
        @foreach ($itemsList as $key => $item)
        <div class="col-6 col-sm-6 col-md-3">
            <div class="item-folder-wrapper product-single">
                <div class="single-products">
                    <div class="productinfo text-center product-box-{{ $item->id }}">
                        <a href="{{ $item->getUrl() }}"><img src="{{ asset($item->getThumb()) }}"
                                alt="{{ $item->title }}" /></a>
                        <a href="{{ $item->getUrl() }}">
                            <p>{{ $item->title }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div style="clear: both; ">
            <ul class="pagination">
              {{ $itemsList->appends(request()->except(['page','_token']))->links() }}
            </ul>
        </div>
    </div>
    @endif
    @endisset

    @if (count($products) ==0)
    {{ trans('front.empty_product') }}
    @else
    <div class="row">
        @foreach ($products as $key => $product)
        <div class="col-sm-4 col-6 col-md-3">
            <div class="product-item">
                <div class="product-main">
                    <div class="product-group">
                        @if ($product->price != $product->getFinalPrice() && $product->kind != SC_PRODUCT_GROUP)
                        <img src="{{ asset($templateFile.'/images/home/sale.png') }}" class="new" alt="" />
                        @elseif($product->kind == SC_PRODUCT_BUILD)
                        <img src="{{ asset($templateFile.'/images/home/bundle.png') }}" class="new" alt="" />
                        @elseif($product->kind == SC_PRODUCT_GROUP)
                        <img src="{{ asset($templateFile.'/images/home/group.png') }}" class="new" alt="" />
                        @endif
                    </div>
                    <div class="product-photo">
                        <a href="{{ $product->getUrl() }}">
                            <img src="{{ asset($product->getThumb()) }}" alt="{{ $product->name }}">
                        </a>
                    </div>
                    <div class="product-name">
                        <a href="{{ $product->getUrl() }}">
                            <h4>{{ $product->name }}</h4>
                        </a>
                    </div>
                    <div class="product-price">
                        {!! $product->showPrice() !!}
                    </div>
                    <div class="product-add-cart">
                        @if ($product->allowSale())
                        <a href="" class="btn btn-default" onClick="addToCartAjax('{{ $product->id }}','default')">
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
                            <a onClick="addToCartAjax('{{ $product->id }}','wishlist')">
                                <i class="fas fa-heart"></i> {{trans('front.add_to_wishlist')}}
                            </a>
                        </li>
                        <li>
                            <a onClick="addToCartAjax('{{ $product->id }}','compare')">
                                <i class="fas fa-exchange-alt"></i> {{trans('front.add_to_compare')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif

    <div style="clear: both; ">
        <ul class="pagination">
            {{ $products->appends(request()->except(['page','_token']))->links() }}
        </ul>
    </div>
</div> --}}

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">{{trans('front.categories')}}</h4>
                        @if($categoriesTop->count())
                            <ul class="filter-catagories">
                                @foreach($categoriesTop as $category)
                                    @if(!empty($categories[$category->id]))
                                        <li><a href="{{$category->getUrl()}}">{{$category->title}}</a>
                                            <ul class="filter-catagories ml-4">
                                                 @foreach($categories[$category->id] as $cateChild)

                                                   <li><a href="{{$cateChild->getUrl()}}">+{{$cateChild->title}}</a></li>

                                                 @endforeach
                                            </ul>
                                        </li>
                                    @else
                                     <li><a href="{{$category->getUrl()}}">{{$category->title}}</a>
                                    @endif
                                @endforeach    
                            </ul>
                        @endif
                    </div>
{{--                     <div class="filter-widget">

                    </div> --}}
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-5 col-md-5">
{{--                                 <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Default Sorting</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Show:</option>
                                    </select>
                                </div> --}}
                            <form action="" method="GET" id="filter_sort">
                                <div >
                                    <div>
                                        @php
                                        $queries = request()->except(['filter_sort','page']);
                                        @endphp
                                        @foreach ($queries as $key => $query)
                                        <input type="hidden" name="{{ $key }}" value="{{ $query }}">
                                        @endforeach
                                        <select class="custom-select" name="filter_sort">
                                            <option value="">{{ trans('front.filters.sort') }}</option>
                                            <option value="price_asc" {{ ($filter_sort =='price_asc')?'selected':'' }}>
                                                {{ trans('front.filters.price_asc') }}</option>
                                            <option value="price_desc" {{ ($filter_sort =='price_desc')?'selected':'' }}>
                                                {{ trans('front.filters.price_desc') }}</option>
                                            <option value="sort_asc" {{ ($filter_sort =='sort_asc')?'selected':'' }}>
                                                {{ trans('front.filters.sort_asc') }}</option>
                                            <option value="sort_desc" {{ ($filter_sort =='sort_desc')?'selected':'' }}>
                                                {{ trans('front.filters.sort_desc') }}</option>
                                            <option value="id_asc" {{ ($filter_sort =='id_asc')?'selected':'' }}>{{ trans('front.filters.id_asc') }}
                                            </option>
                                            <option value="id_desc" {{ ($filter_sort =='id_desc')?'selected':'' }}>
                                                {{ trans('front.filters.id_desc') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class="col-lg-7 col-md-7 text-right">
                                <p>{{trans('front.show')}}: {{$products->count()}} {{trans('front.product')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        @if (count($products) ==0)
                        {{ trans('front.empty_product') }}
                        @else
                        <div class="row">
                            @foreach ($products as $key => $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                                            @if ($product->price != $product->getFinalPrice() && $product->kind !=
                                                 SC_PRODUCT_GROUP)                                
                                              <div class="sale">Sale</div>
                                            @endif
                                            <div class="icon">
                                                <a onClick="addToCartAjax('{{ $product->id }}','wishlist')">
                                                  <i class="icon_heart_alt"></i>
                                                </a>
                                            </div>
                                            <ul>
                                                <li class="w-icon active">
                                                    <a onClick="addToCartAjax('{{ $product->id }}','default')" >
                                                        <i class="icon_cart_alt"></i>
                                                    </a>
                                                </li>
                                                <li class="quick-view"><a href="{{ $product->getUrl() }}">+{{trans('front.quick_view')}}</a></li>
                                               {{--  <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <a href="{{ $product->getUrl() }}">
                                                <h5>{{ $product->name }}</h5>
                                            </a>
                                            <div class="product-price">
                                               {!! $product->showPrice() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12">
                                {{ $products->links() }}
                            </div>
                        </div>
                        @endif
                    </div>
{{--                     <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
@endsection


@section('breadcrumb')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i>{{trans('front.home')}}</a>
                    <span>{{ $title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('filter')
<form action="" method="GET" id="filter_sort">
    <div class="pull-right">
        <div>
            @php
            $queries = request()->except(['filter_sort','page']);
            @endphp
            @foreach ($queries as $key => $query)
            <input type="hidden" name="{{ $key }}" value="{{ $query }}">
            @endforeach
            <select class="custom-select" name="filter_sort">
                <option value="">{{ trans('front.filters.sort') }}</option>
                <option value="price_asc" {{ ($filter_sort =='price_asc')?'selected':'' }}>
                    {{ trans('front.filters.price_asc') }}</option>
                <option value="price_desc" {{ ($filter_sort =='price_desc')?'selected':'' }}>
                    {{ trans('front.filters.price_desc') }}</option>
                <option value="sort_asc" {{ ($filter_sort =='sort_asc')?'selected':'' }}>
                    {{ trans('front.filters.sort_asc') }}</option>
                <option value="sort_desc" {{ ($filter_sort =='sort_desc')?'selected':'' }}>
                    {{ trans('front.filters.sort_desc') }}</option>
                <option value="id_asc" {{ ($filter_sort =='id_asc')?'selected':'' }}>{{ trans('front.filters.id_asc') }}
                </option>
                <option value="id_desc" {{ ($filter_sort =='id_desc')?'selected':'' }}>
                    {{ trans('front.filters.id_desc') }}</option>
            </select>
        </div>
    </div>
</form>

@endsection --}}

@push('styles')
@endpush
@push('scripts')
<script type="text/javascript">
    $('[name="filter_sort"]').change(function(event) {
        $('#filter_sort').submit();
    });
</script>
@endpush