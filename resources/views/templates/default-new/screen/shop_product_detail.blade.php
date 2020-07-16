@php
/*
$layout_page = product_detail
$product: no paginate
$productRelation: no paginate
*/
@endphp

@extends($templatePath.'.layout')

{{-- @section('center')
<div class="product-details">
    <div class="row">
       
        <div class="col-12 col-sm-12 col-md-6">
            <div id="product-detail-image" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="view-product item active" data-slide-number="0">
                        <img src="{{ asset($product->getImage()) }}" alt="">
                    </div>
                    @if ($product->images->count())
                    @foreach ($product->images as $key=>$image)
                    <div class="view-product item" data-slide-number="{{ $key + 1 }}">
                        <img src="{{ asset($image->getImage()) }}" alt="">
                    </div>
                    @endforeach
                    @endif
                </div>
               
            </div>
            @if ($product->images->count())
            
            <a class="left item-control" href="#product-detail-image" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#product-detail-image" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
            @endif
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <form id="buy_block" action="{{ route('cart.add') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
                <div class="product-information">
                    
                    @if ($product->price != $product->getFinalPrice() && $product->kind != SC_PRODUCT_GROUP)
                    <img src="{{ asset($templateFile.'/images/home/sale2.png') }}" class="newarrival" alt="" />
                    @elseif($product->kind == SC_PRODUCT_BUILD)
                    <img src="{{ asset($templateFile.'/images/home/bundle2.png') }}" class="newarrival" alt="" />
                    @elseif($product->kind == SC_PRODUCT_GROUP)
                    <img src="{{ asset($templateFile.'/images/home/group2.png') }}" class="newarrival" alt="" />
                    @endif

                    <h1 id="product-detail-name">{{ $product->name }}</h1>
                    <p>SKU: <span id="product-detail-model">{{ $product->sku }}</span></p>
                    <div id="product-detail-price">
                        {!! $product->showPriceDetail() !!}
                    </div>

                    @if ($product->kind == SC_PRODUCT_GROUP)
                    <span id="product-detail-cart-group" style="display:none">
                        <label>{{ trans('product.quantity') }}:</label>
                        <input type="number" name="qty" value="1" min="1" />
                        <button type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            {{trans('front.add_to_cart')}}
                        </button>
                    </span>
                    @else ($product->allowSale())
                    <span>
                        <label>{{ trans('product.quantity') }}:</label>
                        <input type="number" name="qty" value="1" min="1" />
                        <button type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            {{trans('front.add_to_cart')}}
                        </button>
                    </span>
                    @endif


                    <div id="product-detail-attr">
                        @if ($product->attributes())
                        {!! $product->renderAttributeDetails() !!}
                        @endif
                    </div>

                    @if (sc_config('product_stock'))
                    <b>{{ trans('product.stock_status') }}:</b>
                    <span id="stock_status">
                        @if($product->stock <=0 && !sc_config('product_buy_out_of_stock'))
                            {{ trans('product.out_stock') }} @else {{ trans('product.in_stock') }} @endif </span> <br>
                            @endif


                            @if (sc_config('product_available') && $product->date_available >= date('Y-m-d H:i:s'))
                            <b>{{ trans('product.date_available') }}:</b>
                            <span id="product-detail-available">
                                {{ $product->date_available }}
                            </span>
                            <br>
                            @endif

                            <div class="description">
                                {{ $product->description }}
                            </div>

                            @if (sc_config('product_brand') && !empty($product->brand->name))
                            <b>{{ trans('product.brand') }}:</b>
                            <span id="product-detail-brand">
                                {{ empty($product->brand->name) ? 'None' : $product->brand->name }}
                            </span>
                            <br>
                            @endif


                            @if ($product->kind == SC_PRODUCT_GROUP)
                            <div class="products-group">
                                @php
                                $groups = $product->groups
                                @endphp
                                <b>{{ trans('product.groups') }}</b>:<br>
                                @foreach ($groups as $group)
                                <span class="sc-product-group" data-id="{{ $group->product_id }}">
                                    {!! sc_image_render($group->product->image) !!}
                                </span>
                                @endforeach
                            </div>
                            @endif

                            @if ($product->kind == SC_PRODUCT_BUILD)
                            <div class="products-group">
                                @php
                                $builds = $product->builds
                                @endphp
                                <b>{{ trans('product.builds') }}</b>:<br>
                                <span class="sc-product-build">
                                    {!! sc_image_render($product->image) !!} =
                                </span>
                                @foreach ($builds as $k => $build)
                                {!! ($k) ? '<i class="fa fa-plus" aria-hidden="true"></i>':'' !!}
                                <span class="sc-product-build">{{ $build->quantity }} x
                                    <a target="_new" href="{{ $build->product->getUrl() }}">{!!
                                        sc_image_render($build->product->image) !!}</a>
                                </span>
                                @endforeach
                            </div>
                            @endif
                            <!--/product-information-->
                </div>
            </form>
        </div>
    </div>
</div>



<div class="row category-tab shop-details-tab">
  
    <div class="col-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">{{ trans('product.description') }}</a></li>
        </ul>
    </div>
    <div class="col-12 tab-content">
        <div class="tab-pane fade show active in" id="product-detail-content">
            {!! sc_html_render($product->content) !!}
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@if ($productRelation->count())
<div class="recommended_items">
    <!--recommended_items-->
    <div class="product-list-title">
        {{ trans('front.recommended_items') }}
        <div class="arrow-slider-custom">
            <div class="next">
            </div>
            <div class="prev">
            </div>
        </div>
    </div>
    <div class="product-list-items2">
        @foreach ($productRelation as $key => $product_rel)
        <div class="product-item">
            <div class="product-main">
                <div class="product-group">
                    @if ($product_rel->price != $product_rel->getFinalPrice() && $product_rel->kind !=
                    SC_PRODUCT_GROUP)
                    <img src="{{ asset($templateFile.'/images/home/sale.png') }}" class="new" alt="" />
                    @elseif($product_rel->kind == SC_PRODUCT_BUILD)
                    <img src="{{ asset($templateFile.'/images/home/bundle.png') }}" class="new" alt="" />
                    @elseif($product_rel->kind == SC_PRODUCT_GROUP)
                    <img src="{{ asset($templateFile.'/images/home/group.png') }}" class="new" alt="" />
                    @endif
                </div>
                <div class="product-photo">
                    <a href="{{ $product_rel->getUrl() }}">
                        <img src="{{ asset($product_rel->getThumb()) }}" alt="{{ $product_rel->name }}">
                    </a>
                </div>
                <div class="product-name">
                    <a href="{{ $product_rel->getUrl() }}">
                        <h4>{{ $product_rel->name }}</h4>
                    </a>
                </div>
                <div class="product-price">
                    {!! $product_rel->showPrice() !!}
                </div>
                <div class="product-add-cart">
                    @if ($product_rel->allowSale())
                    <a class="btn btn-default" onClick="addToCartAjax('{{ $product_rel->id }}','default')">
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
                        <a onClick="addToCartAjax('{{ $product_rel->id }}','wishlist')">
                            <i class="fas fa-heart"></i> {{trans('front.add_to_wishlist')}}
                        </a>
                    </li>
                    <li>
                        <a onClick="addToCartAjax('{{ $product_rel->id }}','compare')">
                            <i class="fas fa-exchange-alt"></i> {{trans('front.add_to_compare')}}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endif



@endsection --}}

@section('center')
    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="{{ asset($product->getImage()) }}" alt="" width="500" height="500">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            @if ($product->images->count())
                                <div class="product-thumbs">                                  
                                    <div class="product-thumbs-track ps-slider owl-carousel">
                                        <?php $i = 0;?>
                                       @foreach ($product->images as $key=>$image)
                                            <div 
                                              @if($i==0)
                                                class="pt active"
                                              @else
                                              class="pt"
                                              @endif
                                               data-imgbigurl="{{ asset($image->getImage()) }}">
                                                <img src="{{ asset($image->getImage()) }}" alt="" width="120" height="130">
                                            </div>
                                            <?php $i++;?>
                                         @endforeach
                                    </div>                                    
                                </div>
                            @endif
                        </div>

                        <div class="col-lg-4">
                            <form id="buy_block" action="{{ route('cart.add') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" id="product-detail-id" value="{{ $product->id }}" />
                                <div class="product-details">
                                    <div class="pd-title">       

                                        <h3>{{$product->name}}</h3>
                                        <h5>{{$product->description}}</h5>
                                        <a onClick="addToCartAjax('{{ $product->id }}','wishlist')" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                    </div>
                                    <div class="pd-desc">
                                        <div class="product-price">
                                           {!! $product->showPrice() !!}
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" name="qty" value="1" min="1">
                                        </div>
                                        <button class="btn btn-warning text-white" type="submit">{{trans('front.add_to_cart')}}</button>
                                    </div>
                                    <div id="product-detail-attr">
                                        @if ($product->attributes())
                                        {!! $product->renderAttributeDetails() !!}
                                        @endif
                                    </div>
                                    @if (sc_config('product_stock'))
                                        <b>{{ trans('product.stock_status') }}:</b>
                                        <span id="stock_status">
                                            @if($product->stock <=0 && !sc_config('product_buy_out_of_stock'))
                                                {{ trans('product.out_stock') }} 
                                            @else {{ trans('product.in_stock') }}
                                            @endif 
                                        </span> <br>
                                    @endif
                                    <ul class="pd-tags">
                                         @if (sc_config('product_brand') && !empty($product->brand->name))
                                           <li><span>{{ trans('product.brand') }}</span>: {{ empty($product->brand->name) ? 'None' : $product->brand->name }}
                                           </li>

                                         @elseif ($product->kind == SC_PRODUCT_GROUP)
                                            <div class="products-group">
                                                @php
                                                $groups = $product->groups
                                                @endphp
                                                <b>{{ trans('product.groups') }}</b>:<br>
                                                @foreach ($groups as $group)
                                                <span class="sc-product-group" data-id="{{ $group->product_id }}">
                                                    {!! sc_image_render($group->product->image) !!}
                                                </span>
                                                @endforeach
                                            </div>

                                        @elseif($product->kind == SC_PRODUCT_BUILD)
                                            <div class="products-group">
                                                @php
                                                $builds = $product->builds
                                                @endphp
                                                <b>{{ trans('product.builds') }}</b>:<br>
                                                <span class="sc-product-build">
                                                    {!! sc_image_render($product->image) !!} =
                                                </span>
                                                @foreach ($builds as $k => $build)
                                                {!! ($k) ? '<i class="fa fa-plus" aria-hidden="true"></i>':'' !!}
                                                <span class="sc-product-build">{{ $build->quantity }} x
                                                    <a target="_new" href="{{ $build->product->getUrl() }}">{!!
                                                        sc_image_render($build->product->image) !!}</a>
                                                </span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </ul>
                                    <div class="pd-share">
                                        <div class="p-code">Sku : {{$product->sku}}</div>
                                        <div class="pd-social">
                                            <a href="#"><i class="ti-facebook"></i></a>
                                            <a href="#"><i class="ti-twitter-alt"></i></a>
                                            <a href="#"><i class="ti-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>  
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <div class="product-tab">
                        <h3 class="mb-3">{{trans('front.info_product')}}</h3>
                         {!! sc_html_render($product->content) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section End -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{trans('front.related_products')}}</h2>
                    </div>
                </div>
            </div>
      <!-- Man Banner Section Begin -->
        @if ($productRelation->count())
            <div class="row">
                @foreach ($productRelation as $key => $product)
                    <div class="col-lg-3 col-sm-6">
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

            </div>
        @endif
            <!-- Man Banner Section End -->
        
    </div>
    <!-- Related Products Section End -->
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

@push('styles')

@endpush

@push('scripts')
<script type="text/javascript">
    $('.sc-product-group').click(function(event) {
    if($(this).hasClass('active')){
        return;
    }
    $('.sc-product-group').removeClass('active');
    $(this).addClass('active');
    var id = $(this).data("id");
        $.ajax({
            url:'{{ route("product.info") }}',
            type:'POST',
            dataType:'json',
            data:{id:id,"_token": "{{ csrf_token() }}"},
                beforeSend: function(){
                $('#loading').show();
            },
            success: function(data){
                //console.log(data);
                var showImages = '<div class="carousel-inner">' +
                    '<div class="view-product item active"  data-slide-number="0">'+
                        '<img src="'+data.image+'" alt="">'+
                    '</div>';
                if(data.subImages.length) {
                    $.each(data.subImages, function( index, value ) {
                        showImages +='<div class="view-product item"  data-slide-number="'+(index + 1)+ '">'+
                            '<img src="'+value+'" alt="">'+
                            '</div>'
                      });
                }
                showImages +='</div>';
                if(data.subImages.length) {
                    showImages += '<a class="left item-control" href="#similar-product" data-slide="prev">'+
                        '<i class="fa fa-angle-left"></i></a>'+
                        '<a class="right item-control" href="#similar-product" data-slide="next">'+
                        '<i class="fa fa-angle-right"></i>'+
                        '</a>';
                }
                $('#product-detail-cart-group').show();
                $('#product-detail-name').html(data.name);
                $('#product-detail-model').html(data.sku);
                $('#product-detail-price').html(data.showPrice);
                $('#product-detail-brand').html(data.brand_name);
                $('#product-detail-image').html(showImages);
                $('#product-detail-available').html(data.availability);
                $('#product-detail-id').val(data.id);
                $('#product-detail-image').carousel();
                $('#loading').hide();
                window.history.pushState("", "", data.url);
                sliderProductDetail();
            }
        });
    });
    function sliderProductDetail(){
        $('.carousel-inner').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            nextArrow: $('.right.item-control'),
            prevArrow: $('.left.item-control')
        });
    }
    sliderProductDetail();
</script>

@endpush
