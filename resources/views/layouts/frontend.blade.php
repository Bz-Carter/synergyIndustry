<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>{{ $settings->site_name }}</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	@yield('styles')
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
</head>
<body class="animsition">

<!-- Header Content -->
<header>
    <!-- Header desktop -->
    <nav class="container-header-desktop">
        <div class="top-bar">
            <div class="content-topbar container flex-sb-c h-full">
                <div class="size-w-0 flex-wr-s-c">

                    <div class="t1-s-1 cl-13 m-r-50">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-home" aria-hidden="true"> <strong>Siège:</strong></i>
                        </span>
                        <span> {{$settings->address}}</span>
                    </div>

                    <div class="t1-s-1 cl-13 m-r-10">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        <span>{{$settings->contact_number_1}}/{{$settings->contact_number_2}}</span>
                    </div>

                    <div class="t1-s-1 cl-13 m-r-40">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </span>
                        <span>@lang('head.Hractivity')</span>
                    </div>
                </div>

                <div class="text-nowrap">
                    <a href="{{$settings->facebook}}" target="_blank" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-facebook-official"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-google-plus"></i>
                    </a>

                    <a href="{{$settings->linked_in}}" target="_blank" class="fs-16 cl-13 hov-link2 trans-02 m-l-15">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <div class="limiter-menu-desktop container">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('images/icons/logo-01.png') }}" alt="LOGO"></a>
                </div>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu respon-sub-menu">

                        <li>
                            <a href="{{ url('/') }}">@lang('head.ho')</a>
                        </li>

                        <li>
                            <a href="{{route('ourservices')}}">@lang('head.ser')</a>
                            <ul class="sub-menu">
                                @if ($services->count() == 0)
                                    
                                @else
                                    @foreach ($services as $service)
                                        <li><a href="{{ route('service.single', $service->slug) }}">
                                                @if (app()->getLocale() == 'en')
                                                    {{ $service->name }}
                                                @else
                                                    {{ $service->namefr }}
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                                
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('références')}}">@lang('head.ref')</a>
                        </li>


                        <li>
                            <a href="{{route('news')}}">@lang('head.actu')</a>
                        </li>
                        
                        <li>
                            <a href="{{route('offres')}}">@lang('head.offres')</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('emploi')}}">@lang('head.emploi')</a></li>
                                <li><a href="{{route('devis')}}">Devis</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{route('aboutUs')}}">@lang('head.abou')</a>
                        </li>

                        <li>
                            <a href="{{route('contactUs')}}">@lang('head.cont')</a>
                        </li>

                            <!-- Authentication Links -->
                            @php $locale = session()->get('locale'); @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @switch($locale)
                                        @case('en')
                                        <img src="{{asset('images/en.png')}}" width="30px" height="20x"> En
                                        @break

                                        @default
                                        <img src="{{asset('images/fr.png')}}" width="30px" height="20x"> Fr
                                    @endswitch
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('locale/en') }}"><img src="{{asset('images/en.png')}}" width="30px" height="20x"> English</a>
                                    <a class="dropdown-item" href="{{ url('locale/fr') }}"><img src="{{asset('images/fr.png')}}" width="30px" height="20x"> Français</a>
                                </div>
                            </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ url('/') }}"><img src="{{ asset('images/icons/logo-01.png') }}" alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <div class="menu-mobile">
            <ul class="top-bar-m p-l-20 p-tb-8">
                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-home" aria-hidden="true"> <strong>Siège:</strong></i>
                        </span>
                        <span>{{$settings->address}}</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        <span>{{$settings->contact_number_1}} / {{$settings->contact_number_2}}</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
                        <span class="fs-16 m-r-6">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </span>
                        <span>@lang('head.Hractivity')</span>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-facebook-official"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-google-plus"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- end Header Cotent -->

    <!-- Content -->
    	@yield('content')
    <!-- end Content -->

<!-- footer Content -->
<footer>
    <div class="parallax100 kit-overlay1 p-t-35 p-b-10" style="background-image: url( {{ asset('images/bg-03.jpg') }} );">
        <div class="container">
            <div class="text-center">
                <h1 class="t1-b-1 cl-0 m-b-11">
                    <em>@lang('head.info')</em>
                </h1>
            </div>
            <div></br></div>
            <div></br></div>
            <div></br></div>
            <div class="row justify-content-center justify-content-md-start">
                @if ($activityzones->count() == 0)

                @else
                    @foreach ($activityzones as $activityzone)
                    <div class="col-sm-8 col-md-4 col-lg-3 p-b-20">
                        <div class="size-h-1 flex-s-e p-b-6 m-b-18">
                            <a>
                                <img class="max-s-full" src="{{ asset($activityzone->logo) }}" alt="IMG">
                            </a>
                        </div>

                        <ul>
                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                                <span class="size-w-3">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </span>

                                <span class="size-w-4">
                                    {{ $activityzone->email }}
                                </span>
                            </li>

                            <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                                <span class="size-w-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>

                                @if ($activityzone->phone == null)
                                    
                                @else
                                    <span class="size-w-4">
                                        {!! $activityzone->phone !!}
                                    </span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <div class="bg-10">
        <div class="container txt-center p-tb-15">
            <span class="t1-s-2 cl-14">
                <span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> @lang('foot.copyright')
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </span>
        </div>
    </div>
</footer>
<!-- end footer Content -->

<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
    @yield('scripts')
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/parallax100/parallax100.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/waypoint/jquery.waypoints.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countterup/jquery.counterup.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @endif
    
        @if(Session::has('info'))
            toastr.info("{{Session::get('info')}}")
        @endif
    </script>

</body>
</html>
