@php
$categoriesTop = $modelCategory->start()->getCategoryTop()->getData();
@endphp
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="{{route('home')}}"><img src="{{ asset(sc_store('logo')) }}" alt=""></a>
                        </div>
                        <ul>
                            <li>{{trans('front.shop_info.address')}}: {{sc_store('address')}}</li>
                            <li>{{trans('front.shop_info.hotline')}}:{{sc_store('phone')}}</li>
                            <li>{{trans('front.shop_info.email')}}: {{sc_store('email')}}</li>
                        </ul>
                        <div class="footer-social">
                            <a href="{{sc_store('facebook')}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{sc_store('instagram')}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{sc_store('twitter')}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{sc_store('pinterest')}}"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>{{trans('front.categories')}}</h5>
                        <ul>
                            @foreach($categoriesTop as $category)
                              <li><a href="{{$category->getUrl()}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>{{trans('front.pages')}}</h5>
                        <ul>
                            <li><a href="{{route('home')}}">{{trans('front.home')}}</a></li>
                            <li><a href="{{url('about.html')}}">{{trans('front.about')}}</a></li>
                            <li><a href="{{route("product.all")}}">{{trans('front.shop')}}</a></li>
                            <li><a href="{{route('news')}}">{{trans('front.blog')}}</a></li>
                            <li><a href="{{route('contact')}}">{{trans('front.contact')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>{{ trans('front.subscribe.title') }}</h5>
                        <p>{{trans('front.subscribe.subscribe_des')}}</p>
                        <form action="{{ route('subscribe') }}" method="post" class="subscribe-form">
                         @csrf
                            <input type="text" name="subscribe_email" placeholder="{{ trans('front.subscribe.subscribe_email') }}">
                            <button class="btn" type="submit">{{ trans('front.subscribe.title') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{route('home')}}" target="_blank">{{sc_store('title')}}</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="{{ asset($templateFile.'/images/payment-method.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
