 <?php          
    use App\Models\ContentCategory;
    use App\Models\ContentPage;
    $contentCategories = ContentCategory::all();
    $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
    $query->where('id',  $contentCategories->first()->id);
    })
    ->get();
?>
<!-- Start Footer Area -->
 <footer class="footer-area bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <a href="{{ route('frontend.welcome') }}" class="logo black-logo">
                        <img src="{{ asset('assets/img/1.png') }}" alt="logo" style="width: 189px;/* height: 150px; *//* height: -41px; */position: relative;top: -112px;">
                    </a>
                    <a href="{{ route('frontend.welcome') }}" class="logo white-logo">
                        <img src="{{ asset('assets/img/2.png')}}" alt="logo" style="width: 189px;/* height: 150px; *//* height: -41px; */position: relative;top: -112px;">
                    </a>
                    <p style="position: relative;
                    top: -181px;">{{ trans('global.dlt') }}</p>
                    <ul class="social-link" style="position: relative;
                    top: -175px;">
                        <li><a href="https://www.facebook.com/profile.php?id=100082598344552" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.youtube.com/@dltsoftwarehouse" class="d-block" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                        <li><a href="https://www.instagram.com/umbr.ellatech/" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>{{ trans('global.Explore') }}</h3>
                    <ul class="footer-links-list">
                        <li><a href="{{ route('frontend.welcome') }}">{{ trans('global.home') }}</a></li>
                        @if (LaravelLocalization::setLocale()=='en')
                        <li><a href="{{ route('frontend.contact-us') }}">{{ $contentCategories->skip(2)->take(1)->first()->name }}</a></li>
                        @else
                        <li><a href="{{ route('frontend.contact-us') }}">{{ $contentCategories->skip(2)->take(1)->first()->name_ar }}</a></li>
                        @endif
                        
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    @if (LaravelLocalization::setLocale()=='en')
                    <h3>{{ $contentCategories->first()->name }}</h3>
                    <ul class="footer-links-list">
                        @foreach ($contentPages as $contentPage)
                        <li><a href="{{ route('frontend.content-pages.show',$contentPage->id) }}">{{ $contentPage->title }}</a></li>
                        @endforeach
                    </ul>
                    @else
                    <h3>{{ $contentCategories->first()->name_ar }}</h3>
                    <ul class="footer-links-list">
                        @foreach ($contentPages as $contentPage)
                        <li><a href="{{ route('frontend.content-pages.show',$contentPage->id) }}">{{ $contentPage->title_ar }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                    
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <?php          
                $contentCategories = ContentCategory::all();
                $contentPages = ContentPage::whereHas('categories', function($query) use ($contentCategories) {
                $query->where('id',  $contentCategories->skip(2)->take(1)->pluck('id')->first());
            })->with(['categories', 'tags', 'media'])->get();

            ?>
            @if (LaravelLocalization::setLocale()=='en')
            <div class="single-footer-widget">
                <h3>{{ $contentCategories->skip(1)->take(1)->first()->name }}</h3>
                <ul class="footer-contact-info">
                   
                    <li><i class='bx bx-map'></i>{{ $contentPages->first()->tags->first()->name }}</li>
                    <li><i class='bx bx-phone-call'></i><a href="tel:+20155966671">{{ $contentPages->first()->tags->skip(1)->take(1)->first()->name }}</a></li>
                    <li><i class='bx bx-envelope'></i><span>{{ $contentPages->first()->tags->skip(3)->take(1)->first()->name }}</span></a></li>
                </ul>
            </div>
            @else
            <div class="single-footer-widget">
                <h3>{{ $contentCategories->skip(1)->take(1)->first()->name_ar }}</h3>
                <ul class="footer-contact-info">
                   
                    <li><i class='bx bx-map'></i>{{ $contentPages->first()->tags->first()->name_ar }}</li>
                    <li><i class='bx bx-phone-call'></i><a href="tel:+20155966671">{{ $contentPages->first()->tags->skip(1)->take(1)->first()->name }}</a></li>
                    <li><i class='bx bx-envelope'></i><span>{{ $contentPages->first()->tags->skip(3)->take(1)->first()->name }}</span></a></li>
                </ul>
            </div> 
            @endif
               
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p><i class='bx bx-copyright'></i><script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script>  Powered by <a>DLT SOFTWARE</a></p>
                </div>

               
            </div>
        </div>
    </div>

    <div class="footer-map"><img src="{{ asset('assets/img/footer-map.png')}}" alt="image"></div>
</footer>
<!-- End Footer Area -->
<div class="go-top"><i class="flaticon-up"></i></div>
