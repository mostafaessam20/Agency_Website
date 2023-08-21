<?php          
    use App\Models\ContentCategory;
    use App\Models\ContentPage;
    $contentCategories = ContentCategory::all();
    $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
    $query->where('id',  $contentCategories->first()->id);
    })
    ->get();
    $contentPags = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
    $query->where('id',  $contentCategories->skip(3)->take(1)->first()->id);
    })
    ->get();
?>
        <!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="sbl-half-circle-spin">
                    <div></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        
        @if (LaravelLocalization::setLocale()=='en')
            <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="tracer-responsive-nav">
            <div class="container">
                <div class="tracer-responsive-menu">
                    <div class="logo black-logo">
                        <a href="{{ route('frontend.welcome') }}">
                            <img src="{{asset('assets/img/1.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="logo white-logo">
                        <a href="{{ route('frontend.welcome') }}">
                            <img src="{{asset('assets/img/2.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tracer-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light" style="height: 60px;">
                    <a class="navbar-brand black-logo" href="{{ route('frontend.welcome') }}">
                        <img src="{{asset('assets/img/1.png')}}" alt="logo" style="     width: 264px;        height: 174px;  ">
                    </a>
                    <a class="navbar-brand white-logo" href="{{ route('frontend.welcome') }}">
                        <img src="{{asset('assets/img/2.png')}}" alt="logo" style="     width: 264px;        height: 174px;  ">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav" style="position:relative;right:186px;">
                            <li class="nav-item"><a href="{{ route('frontend.welcome') }}" class="nav-link active">{{ trans('global.home') }} </a>
                                
                            </li>

                          

                            <li class="nav-item"><a  class="nav-link">{{ $contentCategories->first()->name }} <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    @foreach ($contentPages as $contentPage)
                                    <li class="nav-item"><a href="{{ route('frontend.content-pages.show',$contentPage->id) }}" class="nav-link">{{ $contentPage->title }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>
                            <li class="nav-item"><a  class="nav-link">{{ $contentCategories->skip(3)->take(1)->first()->name }} <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    @foreach ($contentPags as $contentPag)
                                    <li class="nav-item"><a href="{{ route('frontend.our-projects',$contentPag->id) }}" class="nav-link">{{ $contentPag->title }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>

                            <li class="nav-item"><a href="{{ route('frontend.about-us') }}" class="nav-link">{{ $contentCategories->skip(1)->take(1)->first()->name }}</a></li>

                            <li class="nav-item"><a href="{{ route('frontend.contact-us') }}" class="nav-link">{{ $contentCategories->skip(2)->take(1)->first()->name }}</a></li>

                           
                        </ul>

                        <div class="others-option d-flex align-items-center" style="position:relative;right:93px;">
                            

                            <div class="option-item">
                                <a href="{{ route('frontend.contact-us') }}" class="default-btn"><i class="flaticon-right"></i>{{ trans('global.Get Started') }}<span></span></a>
                            </div>
                        </div>
                        <div class="btn-group mb-1"style="position:relative;right:22px;">
                            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (LaravelLocalization::setLocale() == 'ar')
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/img/flags/EG.png') }}" alt="">
                                @else
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/img/flags/US.png') }}" alt="">
                                @endif
                            </button>
                            <div class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option">
                            <div class="option-item">
                                <form class="search-box">
                                    <input type="text" class="input-search" placeholder="Search for anything">
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>

                            <div class="option-item">
                                <a href="contact.html" class="default-btn"><i class="flaticon-right"></i>Get Started<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
     <!-- Start Navbar Area -->
     <div class="navbar-area">
        <div class="tracer-responsive-nav">
            <div class="container">
                <div class="tracer-responsive-menu">
                    <div class="logo black-logo">
                        <a href="{{ route('frontend.welcome') }}">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="logo white-logo">
                        <a href="{{ route('frontend.welcome') }}">
                            <img src="{{ asset('assets/img/white-logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tracer-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light" style="height: 60px;">
                    <a class="navbar-brand black-logo" href="{{ route('frontend.welcome') }}">
                        <img src="{{asset('assets/img/1.png')}}" alt="logo" style="     width: 260px;        height: 174px;  ">
                    </a>
                    <a class="navbar-brand white-logo" href="{{ route('frontend.welcome') }}">  
                        <img src="{{asset('assets/img/2.png')}}" alt="logo"  style="     width: 260px;        height: 174px;  ">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav" style="position:relative;right: -254px;">
                            <li class="nav-item"><a href="{{ route('frontend.welcome') }}" class="nav-link active">{{ trans('global.home') }} </a>
                                
                            </li>

                          

                            <li class="nav-item"><a href="#" class="nav-link">{{ $contentCategories->first()->name_ar }} <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    @foreach ($contentPages as $contentPage)
                                    <li class="nav-item"><a href="{{ route('frontend.content-pages.show',$contentPage->id) }}" class="nav-link">{{ $contentPage->title_ar }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>

                            <li class="nav-item"><a  class="nav-link">{{ $contentCategories->skip(3)->take(1)->first()->name_ar }} <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    @foreach ($contentPags as $contentPag)
                                    <li class="nav-item"><a href="{{ route('frontend.our-projects',$contentPag->id) }}" class="nav-link">{{ $contentPag->title_ar }}</a></li>
                                    @endforeach
                                    
                                </ul>
                            </li>

                            <li class="nav-item"><a href="{{ route('frontend.about-us') }}" class="nav-link">{{ $contentCategories->skip(1)->take(1)->first()->name_ar }}</a></li>

                            <li class="nav-item"><a href="{{ route('frontend.contact-us') }}" class="nav-link">{{ $contentCategories->skip(2)->take(1)->first()->name_ar     }}</a></li>

                           
                        </ul>

                        <div class="others-option d-flex align-items-center" style="position:relative;right:-80px;">
                           

                            <div class="option-item">
                                <a href="{{ route('frontend.contact-us') }}" class="default-btn"><i class="flaticon-right"></i>{{ trans('global.Get Started') }}<span></span></a>
                            </div>
                        </div>
                        <div class="btn-group mb-1"style="position:relative;right: -30px;">
                            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (LaravelLocalization::setLocale() == 'ar')
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/img/flags/EG.png') }}" alt="">
                                @else
                                    {{ LaravelLocalization::getCurrentLocaleName() }}
                                    <img src="{{ URL::asset('assets/img/flags/US.png') }}" alt="">
                                @endif
                            </button>
                            <div class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option">
                           

                            <div class="option-item">
                                <a href="{{ route('frontend.contact-us') }}" class="default-btn"><i class="flaticon-right"></i>Get Started<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
@endif
        