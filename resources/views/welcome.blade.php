@extends('layouts.master')
@section('title','DLT SOFTWARE')
@section('content')
 <!-- Start Main Banner Area -->
 <div class="main-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="main-banner-content">
                    <h1 class="wow animate__animated animate__fadeInLeft" style="visibility: visible;animation-duration: 1000ms;animation-delay: 0ms;animation-name: fadeInLeft;font-weight: 800;" data-wow-delay="00ms" data-wow-duration="1000ms">DLT SOFTWARE</h1>
                    @if (LaravelLocalization::setLocale()=='en')
                    <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">{{ trans('global.dlt-home') }}</p>

                    @else
                    <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">{{ trans('global.dlt-home') }}</p>

                    @endif
                    <div class="btn-box">
                        <a href="{{ route('frontend.about-us') }}" class="default-btn wow animate__animated animate__fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms"><i class="flaticon-structure"></i>{{ trans('global.ABOUT US') }}<span></span></a>
                        <a href="https://www.youtube.com/watch?v=5qH1qeRAJJA" class="video-btn wow animate__animated animate__fadeInLeft popup-youtube" data-wow-delay="300ms" data-wow-duration="1000ms"><i class="flaticon-google-play"></i> {{ trans('global.Watch Video') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="main-banner-animation-image">
                    <img src="{{asset('assets/img/main-banner/banner-one/img1.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img2.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img3.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img4.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="900ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img5.png')}}" class="wow animate__animated animate__fadeInUp"   data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img6.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="700ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img7.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="800ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img8.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="800ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img9.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="1000ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img10.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="100ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img11.png')}}" class="wow animate__animated animate__fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/img12.png')}}" class="wow animate__animated animate__fadeInLeft" data-wow-delay="1300ms" data-wow-duration="1000ms" alt="image" data-speed="0.06" data-revert="true">
                    <img src="{{asset('assets/img/main-banner/banner-one/main-pic.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->


<!-- Start Services Area -->
<section class="services-area ptb-100 bg-f1f8fb">
    <div class="container">
        <?php          
            use App\Models\ContentCategory;
            use App\Models\ContentPage;
            $contentCategories = ContentCategory::all();
            $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
            $query->where('id',  $contentCategories->first()->id);
        })
        ->get();
            ?>
        <div class="section-title">
            @if (LaravelLocalization::setLocale()=='en')
            <span class="sub-title"><img src="{{asset('assets/img/star-icon.png')}}" alt="image">{{ trans('global.Our Services') }}</span>
            <h2>{{ $contentCategories->first()->name}}<span class="overlay"></span></h2>
            <p>{{ trans('global.We are') }}</p>
            @else
            <span class="sub-title"><img src="{{asset('assets/img/star-icon.png')}}" alt="image"> {{ trans('global.Our Services') }}</span>
            <h2>{{ $contentCategories->first()->name_ar}}<span class="overlay"></span></h2>
            <p>{{ trans('global.We are') }}</p>
            @endif
           
        </div>

        <div class="row">
            @foreach ($contentPages as $contentPage)
                @if (LaravelLocalization::setLocale()=='en')
                     <div class="col-lg-4 col-md-6 col-sm-6">
                         <div class="single-services-box wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                             <div class="icon">
                                 <img src="{{asset('assets/img/services/icon1.png')}}" alt="image">
                             </div>
                             <h3><a href="{{ route('frontend.content-pages.show',$contentPage->id) }}">{{ $contentPage->title }}</a></h3>
                             <a href="{{ route('frontend.content-pages.show',$contentPage->id) }}" class="read-more-btn">{{ trans('global.Read More') }} <i class="flaticon-right"></i></a>
                         </div>
                     </div>
                @else
                         <div class="col-lg-4 col-md-6 col-sm-6">
                             <div class="single-services-box wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                 <div class="icon">
                                     <img src="{{asset('assets/img/services/icon1.png')}}" alt="image">
                                 </div>
                                 <h3><a href="{{ route('frontend.content-pages.show',$contentPage->id) }}">{{ $contentPage->title_ar }}</a></h3>
                                 <a href="{{ route('frontend.content-pages.show',$contentPage->id) }}" class="read-more-btn">{{ trans('global.Read More') }} <i class="flaticon-right"></i></a>
                             </div>
                         </div>
                @endif
                
            @endforeach
        </div>
    </div>

    <div class="circle-shape2"><img src="{{asset('assets/img/shape/circle-shape2.png')}}" alt="image"></div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- End Services Area -->




<!-- Start About Area -->
<section class="about-area pb-100">
    <div class="container-fluid">
        <?php          
     
        $contentCategories = ContentCategory::all();
        $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
        $query->where('id',  $contentCategories->skip(1)->take(1)->pluck('id')->first());
    })->with(['categories', 'tags', 'media'])->get();
        ?>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/about/img1.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <div class="content">
                        <span class="sub-title"><img src="{{asset('assets/img/star-icon.png')}}" alt="image"> {{ trans('global.ABOUT US') }}</span>
                        <h2>{{ trans('global.WHO WE ARE ?') }}</h2>
                        <p>{{ trans('global.dlt') }}</p>
                        <ul class="features-list">
                           @foreach ($contentPages->first()->tags as $contentPage )
                                @if (LaravelLocalization::setLocale()=='en')
                                <li><span>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/icon2.png')}}" alt="image">
                                    </div>
                                    <h3>{{$contentPage->name  }}</h3>
                                   
                                </span></li>
                                @else
                                <li><span>
                                    <div class="icon">
                                        <img src="{{asset('assets/img/icon2.png')}}" alt="image">
                                    </div>
                                    <h3>{{$contentPage->name_ar  }}</h3>
                                   
                                </span></li>
                                @endif
                            

                            @endforeach


                            
                        </ul>
                        <p>{{ trans('global.dlt1') }}</p>
                        <a href="{{ route('frontend.about-us') }}" class="default-btn"><i class="flaticon-right"></i>{{ trans('global.ABOUT US') }}<span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="circle-shape1"><img src="{{asset('assets/img/shape/circle-shape1.png')}}" alt="image"></div>
</section>
<!-- End About Area -->

   <!-- Start Partner Area -->
   <div class="partner-area pt-100 pb-70 bg-f1f8fb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/partner/imgs1.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/partner/imgs2.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/partner/imgs3.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/partner/imgs4.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/partner/imgs5.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="single-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <img src="{{asset('assets/img/partner/imgs6.png')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>
</div>
<!-- End Partner Area -->

<!-- Start Project Start Area -->
<section class="project-start-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="project-start-image">
                    <img src="{{asset('assets/img/project-start1.png')}}" data-speed="0.06" data-revert="true" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="project-start-content">
                    <h2 class="wow animate__animated animate__fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{{ trans('global.We Like to Start Your Project With Us') }}</h2>
                    <p class="wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">{{ trans('global.dlt-home') }}</p>
                    <a href="{{ route('frontend.contact-us') }}" class="default-btn wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms"><i class="flaticon-web"></i>{{ trans('global.Get Started') }}<span></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="circle-shape1"><img src="{{asset('assets/img/shape/circle-shape1.png')}}" alt="image"></div>
</section>
<!-- End Project Start Area -->
@endsection