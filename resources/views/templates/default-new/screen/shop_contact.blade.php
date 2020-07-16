@php
/*
$layout_page = shop_contact
*/
@endphp

@extends($templatePath.'.layout')

@section('main')
{{-- <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="title-page">{{ $title }}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 contact_content">
            <address>
                <p>{{ sc_store('title') }}</p>
                <p>{{ sc_store('address') }}</p>
                <p>{{ sc_store('long_phone') }}</p>
                <p>{{ sc_store('email') }}</p>
            </address>
            <div class="social-networks">
                <h2 class="title text-center">Social Networking</h2>
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <form method="post" action="{{ route('contact.post') }}" class="contact-form">
                {{ csrf_field() }}
                <div id="contactFormWrapper" style="margin: 30px;">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>{{ trans('front.contact_form.name') }}:</label>
                            <input type="text" class="form-control {{ ($errors->has('name'))?"input-error":"" }}"
                                name="name" placeholder="Your name..." value="{{ old('name') }}">
                            @if ($errors->has('name'))
                            <span class="help-block">
                                {{ $errors->first('name') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>{{ trans('front.contact_form.email') }}:</label>
                            <input type="email" class="form-control {{ ($errors->has('email'))?"input-error":"" }}"
                                name="email" placeholder="Your email..." value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                {{ $errors->first('email') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label>{{ trans('front.contact_form.phone') }}:</label>
                            <input type="telephone" class="form-control {{ ($errors->has('phone'))?"input-error":"" }}"
                                name="phone" placeholder="Your phone..." value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                {{ $errors->first('phone') }}
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="control-label">{{ trans('front.contact_form.subject') }}:</label>
                            <input type="text" class="form-control {{ ($errors->has('title'))?"input-error":"" }}"
                                name="title" placeholder="Subject..." value="{{ old('title') }}">
                            @if ($errors->has('title'))
                            <span class="help-block">
                                {{ $errors->first('title') }}
                            </span>
                            @endif
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                            <label class="control-label">{{ trans('front.contact_form.content') }}:</label>
                            <textarea class="form-control {{ ($errors->has('content'))?"input-error":"" }}" rows="5"
                                cols="75" name="content" placeholder="Your Message...">{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                            <span class="help-block">
                                {{ $errors->first('content') }}
                            </span>
                            @endif

                        </div>
                    </div>
                    <div class="btn-toolbar form-group">
                        <input type="submit" value="{{ trans('front.contact_form.submit') }}" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>{{trans('front.contact')}}</h4>
                    <p>{{trans('front.contact_form.contact_us')}}</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>{{trans('front.contact_form.address')}}:</span>
                            <p>{{sc_store('address')}}</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>{{trans('front.contact_form.phone')}}:</span>
                            <p>{{sc_store('phone')}}</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>{{trans('front.contact_form.phone')}}:</span>
                             <p>{{sc_store('email')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>{{trans('front.contact_form.title')}}</h4>
                        <form method="post" action="{{ route('contact.post') }}" class="comment-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input type="text" name="name"class="form-control {{ ($errors->has('name'))?"input-error":"" }}"  placeholder="{{trans('front.contact_form.name')}}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-4 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input type="email" name="email" class="form-control {{ ($errors->has('email'))?"input-error":"" }}" placeholder="{{trans('front.contact_form.email')}}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-lg-4 form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <input type="telephone" name="phone" class="form-control {{ ($errors->has('email'))?"input-error":"" }}" placeholder="{{trans('front.contact_form.phone')}}">
                                     @if ($errors->has('phone'))
                                        <span class="help-block">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                               <div class="col-lg-12 form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    <input type="text" name="title" name="title" class="form-control {{ ($errors->has('title'))?"input-error":"" }}" placeholder="{{trans('front.contact_form.subject')}}">
                                   @if ($errors->has('title'))
                                        <span class="help-block">
                                            {{ $errors->first('title') }}
                                        </span>
                                    @endif 
                                </div>
                                <div class="col-lg-12 form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    <textarea name="content" placeholder="{{trans('front.contact_form.content')}}" rows="5"></textarea>
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                            {{ $errors->first('content') }}
                                        </span>
                                    @endif 
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="site-btn">{{ trans('front.contact_form.submit') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
<!-- Map Section Begin -->
<div class="map">
    <div class="container">
        <div class="map-inner">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                height="610" style="border:0" allowfullscreen="">
            </iframe>
            <div class="icon">
                <i class="fa fa-map-marker"></i>
            </div>
        </div>
    </div>
</div>
<!-- Map Section Begin -->
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