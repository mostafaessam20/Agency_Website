@extends('layouts.master')
@section('title','contact-us')
@section('content')
<?php          
            use App\Models\ContentCategory;
            use App\Models\ContentPage;
        $contentCategories = ContentCategory::all();
        $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
        $query->where('id',  $contentCategories->skip(2)->take(1)->pluck('id')->first());
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

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                @if (LaravelLocalization::setLocale()=='en')
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>{{ trans('global.Our Address') }}</h3>
                        <p>{{ $contentPages->first()->tags->first()->name }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <h3>{{ trans('global.Contact') }}</h3>
                        <p>{{ trans('global.two_factor.phone_number') }}  <a href="tel:+20155966671">{{ $contentPages->first()->tags->skip(1)->take(1)->first()->name }} <br>{{ $contentPages->first()->tags->skip(2)->take(1)->first()->name }} </a></p>
                        <p>{{ trans('global.login_email') }} <a href="#"><span>{{ $contentPages->first()->tags->skip(3)->take(1)->first()->name }}</span></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <h3>{{ trans('global.Hours of Work') }}</h3>
                        <p>{{ $contentPages->first()->tags->skip(4)->take(1)->first()->name }}</p>
                    </div>
                </div>
                @else
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-map'></i>
                        </div>
                        <h3>{{ trans('global.Our Address') }}</h3>
                        <p>{{ $contentPages->first()->tags->first()->name_ar }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-phone-call'></i>
                        </div>
                        <h3>{{ trans('global.Contact') }}</h3>
                        <p>{{ trans('global.two_factor.phone_number') }} <a href="tel:+20155966671">{{ $contentPages->first()->tags->skip(1)->take(1)->first()->name }} <br>{{ $contentPages->first()->tags->skip(2)->take(1)->first()->name }} </a></p>
                        <p>{{ trans('global.login_email') }}: <a href="#"><span>{{ $contentPages->first()->tags->skip(3)->take(1)->first()->name }}</span></a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <div class="icon">
                            <i class='bx bx-time-five'></i>
                        </div>
                        <h3>{{ trans('global.Hours of Work') }}</h3>
                        <p>{{ $contentPages->first()->tags->skip(4)->take(1)->first()->name_ar }}</p>
                    </div>
                </div>
                @endif
               
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->
     <!-- Start Contact Area -->
     <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title"><img src="{{ asset('assets/img/star-icon.png')}}" alt="image"> {{ trans('global.GET IN TOUCH') }}</span>
                <h2>{{ trans('global.Ready to Get Started?') }}<span class="overlay"></span></h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact-image" data-tilt>
                        <img src="{{ asset('assets/img/contact.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form">
                        <form method="POST" action="{{ route('frontend.crm-customers.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label class="required" for="first_name">{{ trans('cruds.crmCustomer.fields.first_name') }}</label>
                                        <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">{{ trans('cruds.crmCustomer.fields.last_name') }}</label>
                                    <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label for="email">{{ trans('cruds.crmCustomer.fields.email') }}</label>
                                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="phone">{{ trans('cruds.crmCustomer.fields.phone') }}</label>
                                        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="description">{{ trans('cruds.crmCustomer.fields.description') }}</label>
                                         <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <label for="g-recaptcha-response">Google recaptcha :</label>
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                  </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn"><i class="flaticon-tick"></i>{{ trans('global.save') }}<span></span></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    <!-- Start Map Area -->
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444.32413273085064!2d31.353145225239732!3d30.054056359477762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e781cb5f92d%3A0x89df260d498ea8e6!2zNTIg2K3ZhNmF2Yog2K3Ys9mGINi52YTZitiMINin2YTZhdmG2LfZgtipINin2YTYq9in2YXZhtip2Iwg2YXYr9mK2YbYqSDZhti12LHYjCDZhdit2KfZgdi42Kkg2KfZhNmC2KfZh9ix2KnigKwgMTEzNzE!5e0!3m2!1sar!2seg!4v1684154945384!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
    <!-- End Map Area -->
@endsection