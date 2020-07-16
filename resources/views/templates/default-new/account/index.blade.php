@php
/*
$layout_page = shop_profile
$user
*/ 
@endphp

@extends($templatePath.'.layout')

@section('main')
<div class="container mt-5 mb-5">
    <div class="row">
        {{-- <div class="col-12">
            <h2 class="title-page">{{ trans('account.my_profile') }}</h2>
    </div> --}}
    <div class="col-12 col-sm-12 col-md-3">
        @include($templatePath.'.account.nav_customer')
    </div>
    <div class="col-12 col-sm-12 col-md-9">
        <div class="card">
            <div class="card-body min-height-37vh member-index" style=" min-height: 39vh;">
                <p>Wellcome <span> {{$user['first_name']}} {{$user['last_name']}}</span>!</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('breadcrumb')
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i>{{trans('front.home')}}</a>
                     <a href="{{ route('member.index') }}">{{ trans('front.my_account') }}</a>
                    <span>{{ $title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection