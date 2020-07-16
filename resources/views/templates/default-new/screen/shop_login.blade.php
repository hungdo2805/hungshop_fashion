@extends($templatePath.'.layout')

@section('main')
<!--form-->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 active" id="tab-login">
                    <div class="login-form mt-5">
                        <!--login form-->
                        @include($templatePath.'.auth.login')
                    </div>
                    <!--/login form-->
                </div>
                <div class="col-12 col-sm-12 col-md-6" id="tab-signup">
                    <div class="signup-form mt-5">
                        <!--sign up form-->
                        @include($templatePath.'.auth.register')
                    </div>
                    <!--/sign up form-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/form-->
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