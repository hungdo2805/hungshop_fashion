@php
/*
$layout_page = shop_profile
$user
*/ 
@endphp

@extends($templatePath.'.layout')

@section('main')
<div class="container mb-5 mt-5">
    <div class="row justify-content-center">
        {{-- <div class="col-12">
            <h2 class="title-page">{{ trans('account.my_profile') }}</h2>
        </div> --}}
        <div class="col-12 col-sm-12 col-md-3">
            @include($templatePath.'.account.nav_customer')
        </div>
        <div class="col-12 col-sm-12 col-md-9 min-height-37vh">
            <h3 class="title-optoins-customer">{{ $title }}</h3>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('member.post_change_password') }}">
                        @csrf

                        <div class="form-group row {{ Session::has('password_old_error') ? ' has-error' : '' }}">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ trans('account.password_old') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password_old" required>

                                @if(Session::has('password_old_error'))
                                <span class="help-block">{{ Session::get('password_old_error') }}</span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ trans('account.password_new') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if($errors->has('password'))
                                <span class="help-block">{{ $errors->first('password') }}</span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ trans('account.password_confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('account.update_infomation') }}
                                </button>
                            </div>
                        </div>
                    </form>
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