@php
/*
$layout_page = news_detail
$news: no paginate
*/
@endphp

@extends($templatePath.'.layout')

@section('main')
<section>
    <div class="container mt-5 mb-5">
        <div class="row">
{{--             <div class="col-md-3">
                <div class="blog-sidebar">
                    <div class="recent-post">
                        <h4>Recent Post</h4>
                        <div class="recent-blog">
                            @foreach($latest_news as $news)
                            <a href="{{ $news->getUrl() }}" class="rb-item">
                                <div class="rb-pic">
                                    <img src="{{ asset($news->getThumb()) }}" alt="{{$news->title}}" >
                                </div>
                                <div class="rb-text">
                                    <h6>{{$news->title}}</h6>
                                    <p><i class="fa fa-calendar" aria-hidden="true"></i><span>{{ $news->created_at->format('d-m-Y H:i') }}</span></p>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-12">
               {{--  {{dd($latest_news)}} --}}
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2>{{ $title }}</h2>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i><span>{{ $news->created_at->format('d-m-Y H:i') }}</span></p>
                    </div>
                    <div class="blog-large-pic">
                      {{--   <img class="img-fluid" src="{{$news->image}}" alt=""> --}}
                    </div>
                    <div class="blog-detail-desc">
                        <p>
                            {!! sc_html_render($news->content) !!}
                        </p>
                    </div>

                    <div class="tag-share">
                        <div class="details-tag">
{{--                        <ul>
                                <li><i class="fa fa-tags"></i></li>
                                <li>Travel</li>
                                <li>Beauty</li>
                                <li>Fashion</li>
                            </ul> --}}
                        </div>
                        <div class="blog-share">
                            <span>Share:</span>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- {{dd($news)}} --}}
            <div class="col-12 new-detail">
                
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
                    <a href="{{route('news')}}">{{trans('front.blog')}}</a>
                    <span>{{ $title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
