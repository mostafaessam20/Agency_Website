<!DOCTYPE html>
@if (LaravelLocalization::setLocale()=='en')
<html lang="en" dir="ltr">

@else
<html lang="ar" dir="rtl">
 
@endif
    @include('layouts.head')
        <body>
                @include('layouts.main-navbar')
                @yield('content')
                @include('layouts.footer')
               
            @include('layouts.footer-scripts')
        </body>
</html>
