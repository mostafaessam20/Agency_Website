@extends('layouts.master')
@section('title','About-Us')
@section('content')
<?php          
            use App\Models\ContentCategory;
            use App\Models\ContentPage;
        $contentCategories = ContentCategory::all();
        $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
        $query->where('id',  $contentCategories->skip(1)->take(1)->pluck('id')->first());
    })->with(['categories', 'tags', 'media'])->get();
        ?>
     <!-- Start Page Title Area -->
     <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                @if (LaravelLocalization::setLocale()=='en')
                <h2>{{ $contentPages->first()->title }}</h2>
                <ul>
                    <li><a href="{{ route('frontend.welcome') }}">{{ trans('global.home') }}</a></li>
                    <li>{{ $contentPages->first()->title }}</li>
                </ul>
                @else
                <h2>{{ $contentPages->first()->title_ar }}</h2>
                <ul>
                    <li><a href="{{ route('frontend.welcome') }}">{{ trans('global.home') }}</a></li>
                    <li>{{ $contentPages->first()->title_ar }}</li>
                </ul>  
                @endif
                
            </div>
        </div>

        <div class="shape-img1"><img src="{{ asset('assets/img/shape/shape1.svg')}}" alt="image"></div>
        <div class="shape-img2"><img src="{{ asset('assets/img/shape/shape2.png')}}" alt="image"></div>
        <div class="shape-img3"><img src="{{ asset('assets/img/shape/shape3.png')}}" alt="image"></div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start About Area -->
    <section class="about-area ptb-100">
        <div class="container-fluid">
            
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <img src="{{ asset('assets/img/about/img1.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <div class="content">
                            <span class="sub-title"><img src="{{ asset('assets/img/star-icon.png')}}" alt="image">{{ trans('global.ABOUT US') }}</span>
                            <h2>{{ trans('global.WHO WE ARE ?') }}</h2>
                            <p>{{ trans('global.dlt1') }}</p>
                            <ul class="features-list">
                                @if (LaravelLocalization::setLocale()=='en')
                                @foreach ($contentPages->first()->tags as $contentPage )
                          
                                <li><span>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/icon2.png')}}" alt="image">
                                    </div>
                                    <h3>{{$contentPage->name  }}</h3>
                                   
                                </span></li>
    
                                @endforeach
                                @else
                                @foreach ($contentPages->first()->tags as $contentPage )
                          
                                <li><span>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/icon2.png')}}" alt="image">
                                    </div>
                                    <h3>{{$contentPage->name_ar  }}</h3>
                                   
                                </span></li>
    
                                @endforeach
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="about-inner-area">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-text">
                            <h3>{{ trans('global.Our History') }}</h3>
                            <p>{{ trans('global.dlt2') }}</p>
                            
                            <ul class="features-list">
                                <li><i class="flaticon-tick"></i>{{ trans('global.Activate Listening') }}</li>
                                <li><i class="flaticon-tick"></i> {{ trans('global.Brilliant minds') }}</li>
                                <li><i class="flaticon-tick"></i>{{ trans('global.Better.Best!') }}</li>
                                <li><i class="flaticon-tick"></i>{{ trans('global.Branding it better!') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="about-text">
                            <h3>{{ trans('global.Our Mission') }}</h3>
                            <p>{{ trans('global.dlt3') }}</p>
                            
                            <ul class="features-list">
                                <li><i class="flaticon-tick"></i> {{ trans('global.Expect more') }}</li>
                                <li><i class="flaticon-tick"></i> {{ trans('global.Good thinking') }}</li>
                                <li><i class="flaticon-tick"></i> {{ trans('global.In real we trust') }}</li>
                            </ul>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>

        <div class="circle-shape1"><img src="{{ asset('assets/img/shape/circle-shape1.png')}}" alt="image"></div>
    </section>
    <!-- End About Area -->
@endsection