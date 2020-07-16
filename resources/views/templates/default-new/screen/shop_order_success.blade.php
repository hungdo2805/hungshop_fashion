@php
/*
$layout_page = shop_cart
*/
@endphp

@extends($templatePath.'.layout')

@section('main')
<section>
    <div class="container mt-5 mb-5">
        <div class="row min-height-37vh">
            <div class="col-md-12">
                <h2 class="title-page">{{ $title }}</h2>
            </div>
            <div class="col-md-12 text-success">
                <h2 class="text-success">{{ trans('order.success.msg') }}</h2>
                <h3 class="text-success">{{ trans('order.success.order_info',['order_id'=>session('orderID')]) }}</h3>
            </div>
        </div>
    </div>
</section>
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