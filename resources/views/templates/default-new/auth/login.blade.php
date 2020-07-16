@php
/*
$layout_page = shop_auth
*/ 
@endphp

{{-- <h2>{{ trans('account.title_login') }}</h2>
<form action="{{ route('postLogin') }}" method="post" class="box">
    {!! csrf_field() !!}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">{{ trans('account.email') }}</label>
        <input class="is_required validate account_input form-control {{ ($errors->has('email'))?"input-error":"" }}"
            type="text" name="email" value="{{ old('email') }}">
        @if ($errors->has('email'))
        <span class="help-block">
            {{ $errors->first('email') }}
        </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="control-label">{{ trans('account.password') }}</label>
        <input class="is_required validate account_input form-control {{ ($errors->has('password'))?"input-error":"" }}"
            type="password" name="password" value="">
        @if ($errors->has('password'))
        <span class="help-block">
            {{ $errors->first('password') }}
        </span>
        @endif

    </div>
    <p class="lost_password form-group">
        <a class="btn btn-link" href="{{ route('forgot') }}">
            {{ trans('account.password_forgot') }}
        </a>
        <br>
    </p>
    <button type="submit" name="SubmitLogin" class="btn btn-default btn-submit">{{ trans('account.login') }}</button> --}}
</form>
    <!-- Register Section Begin -->
    <div class="register-login-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-form">
                       <h2>{{ trans('account.title_login') }}</h2>
                        <form action="{{ route('postLogin') }}" method="post" class="box">
                            @csrf
                            <div class="group-input">
                                <label for="email">{{ trans('account.email') }}</label>
                                <input type="text" name="email" id="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="group-input">
                                <label for="pass">{{ trans('account.password') }}</label>
                                <input type="password" name="password" id="password">
                                @if ($errors->has('password'))
                                    <span class="help-block text-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
{{--                                         Save Password
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span> --}}
                                    </label>
                                    <a href="{{ route('forgot') }}" class="forget-pass">{{ trans('account.password_forgot') }}</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">{{ trans('account.login') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->