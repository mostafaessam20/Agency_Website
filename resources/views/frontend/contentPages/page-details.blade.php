@extends('layouts.master')
@section('title','DLT SOFTWARE')
@section('content')
      <!-- Start Page Title Area -->
      <section class="page-title-area">
        <div class="container">
            @if (LaravelLocalization::setLocale()=='en')
            <div class="page-title-content">
                <h2>{{ $contentPage->first()->title }}</h2>
                <ul>
                    <li><a href="{{ route('frontend.welcome') }}">{{ trans('global.home') }}</a></li>
                    <li><a >{{ $contentPage->first()->categories->first()->name }}</a></li>
                    
                </ul>
            </div>
            @else
            <div class="page-title-content">
                <h2>{{ $contentPage->first()->title_ar }}</h2>
                <ul>
                    <li><a href="{{ route('frontend.welcome') }}">{{ trans('global.home') }}</a></li>
                    <li><a >{{ $contentPage->first()->categories->first()->name_ar }}</a></li>
                    
                </ul>
            </div>
            @endif
            
        </div>

        <div class="shape-img1"><img src="{{asset('assets/img/shape/shape1.svg')}}" alt="image"></div>
        <div class="shape-img2"><img src="{{asset('assets/img/shape/shape2.png')}}" alt="image"></div>
        <div class="shape-img3"><img src="{{asset('assets/img/shape/shape3.png')}}" alt="image"></div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start Services Studies Details Area -->
    <section class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                @if (LaravelLocalization::setLocale()=='en')
                <div class="col-lg-8 col-md-12">
                    <div class="services-details-image">
                        <img src="{{$contentPage->first()->featured_image->url}}" alt="image" style="width: 750px">
                    </div>
                    <div class="services-details-desc">
                        
                        <span class="sub-title">{{ $contentPage->first()->title }}</span>
                        <h3>{{ trans('global.About this Service') }}</h3>
                        <p>{{ $contentPage->first()->page_text }}</p>
                       
                        <p>{{ $contentPage->first()->excerpt }}</p>
                        
                        
                        
                    </div>
                </div>
                        @else
                        <div class="col-lg-8 col-md-12">
                            <div class="services-details-image">
                                <img src="{{$contentPage->first()->featured_image->url}}" alt="image" style="width: 750px">
                            </div>
                            <div class="services-details-desc">
                                
                                <span class="sub-title">{{ $contentPage->first()->title_ar }}</span>
                                <h3>{{ trans('global.About this Service') }}</h3>
                                <p>{{ $contentPage->first()->page_text_ar }}</p>
                               
                                <p>{{ $contentPage->first()->excerpt_ar }}</p>
                                
                                
                                
                            </div>
                        </div>
                        @endif
                

                
            </div>
        </div>
    </section>
    <!-- End Services Studies Details Area -->

   
@endsection