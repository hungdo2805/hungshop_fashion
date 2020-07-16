@php
$banners = $modelBanner->start()->getBanner()->getData()
@endphp
@if (!empty($banners))
<!--slider-->
{{-- <div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
      <div class=" slider-home">
        @foreach ($banners as $key => $banner)
        <div class="slider-home-item">
          <a href="{{ route('banner.click',['id' => $banner->id]) }}" target="{{ $banner->target }}">
            <img src="{{ asset($banner->image) }}" alt="">
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div> --}}
<!--slider-->
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
          @foreach($banners as $key => $banner)
            <div class="single-hero-items set-bg" data-setbg="{{ asset($banner->image) }}">
                <div class="container">
                  <div class="row">
                     {!!$banner->html!!}
                  </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Section End -->


@endif