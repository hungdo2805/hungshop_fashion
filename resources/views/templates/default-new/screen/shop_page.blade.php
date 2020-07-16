@php
/*
$layout_page = shop_page
$page: no paginate
*/ 
@endphp

@extends($templatePath.'.layout')

@section('main')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="title-page">{{ $title }}</h2>
            </div>
            <div class="col-12 mt-2">
                {!! sc_html_render($page->content) !!}
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