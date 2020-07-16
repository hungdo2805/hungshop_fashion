@php
/*
$layout_page = news_list
$news: paginate
Use paginate: $news->appends(request()->except(['page','_token']))->links()
$products: paginate
Use paginate: $products->appends(request()->except(['page','_token']))->links()
*/
@endphp


@extends($templatePath.'.layout')

@section('main')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="title-page">{{ $title }}</h2>
        </div>
        <!-- Center colunm-->
        @if($news->count()>0)
           @foreach($news as $newsDetail)
                <div class="col-lg-4 col-sm-4 mt-2">
                    <div class="blog-item">
                        <div class="bi-pic">
                            <a href="{{ $newsDetail->getUrl() }}"><img src="{{ asset($newsDetail->getThumb()) }}" alt="{{ $newsDetail->title }}"></a>
                        </div>
                        <div class="bi-text">
                            <a href="{{ $newsDetail->getUrl() }}">
                                <h4>{{ $newsDetail->title }}</h4>
                            </a>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i><span>{{ $newsDetail->created_at->format('d-m-Y H:i') }}</span></p>
                        </div>
                    </div>
                </div>               
           @endforeach

            <div class="col-lg-12 col-md-12">
                {{ $news->links() }}
            </div>
        @else
            <ul class="blog-posts">
                <li class="post-item">
                    {!! trans('front.no_data') !!}
                </li>
            </ul>
        @endif

{{--         <div class="col-12 col-sm-12 col-md-12 min-height-37vh">
            @if ($news->count())
            <ul class="blog-posts">
                @foreach ($news as $newsDetail)
                <li class="post-item">
                    <article class="entry">
                        <div class="row">
                            <div class="col-12 col-sm-5 col-md-3">
                                <div class="entry-thumb image-hover2"> <a href="{{ $newsDetail->getUrl() }}">
                                        <figure><img src="{{ asset($newsDetail->getThumb()) }}"
                                                alt="{{ $newsDetail->title }}" alt="Blog"></figure>
                                    </a> </div>
                            </div>
                            <div class="col-12 col-sm-7 col-md-9">
                                <h3 class="entry-title"><a
                                        href="{{ $newsDetail->getUrl() }}">{{ $newsDetail->title }}</a></h3>
                                <div class="entry-meta-data"> <span class="author"> <span class="date"><i class="far fa-calendar-alt"></i>&nbsp; {{ $newsDetail->created_at }}</span>
                                </div>
                                <div class="entry-excerpt">{{ $newsDetail->description }}</div>
                                <a href="{{ $newsDetail->getUrl() }}"
                                    class="button read-more">{{ trans('front.view_more') }}&nbsp; <i
                                        class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </article>
                    <hr>
                </li>
                @endforeach
            </ul>

            <div class="sortPagiBar">
                <div class="pagination-area ">
                    {{ $news->links() }}
                </div>
            </div>
            @else
            <ul class="blog-posts">
                <li class="post-item">
                    {!! trans('front.no_data') !!}
                </li>
            </ul>
            @endif

        </div>
        <div class="clearfix"></div> --}}
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
                    <span>{{ $title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
