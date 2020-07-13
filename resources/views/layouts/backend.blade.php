<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>{{ config('app.name', 'Laravel') }}</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">

@yield('style')

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/animate-css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/parsleyjs/css/parsley.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">

@yield('style')
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('assets/images/thumbnail.png') }}" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="{{ url('admin/home') }}">
                    <img src="{{ asset('assets/images/logo-icon.svg') }}" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">Synergy I...</span>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="{{ asset( $user->profile->avatar ) }}" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="{{ asset( $user->profile->avatar ) }}" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <!-- <p class="user-name">samuelmorris@info.com</p> -->
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="{{ route('user.profile') }}"><i class="icon-user"></i>My Profile</a></li>
                                                @if (Auth::user()->admin)
                                                    <li><a href="{{ route('settings') }}"><i class="icon-settings"></i>Settings</a></li>
                                                @endif
                                                <li class="divider"></li>
                                                <li><a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();"
                                                    ><i class="icon-power"></i>Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @if (Auth::check())
            <!-- leftsidebar -->
        <div id="leftsidebar" class="sidebar">
            <div class="sidebar-scroll">
                <nav id="leftsidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="heading">Main</li>
                        <li class="{{ (request()->segment(2) == 'home') ? 'active': ''}}"><a href="{{ route('home') }}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li class="{{ request () -> routeIs ( 'slides', 'slide.create', 'slides.trashed'  ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-equalizer"></i><span>Slider</span></a>
                            <ul>
                                <!--<li><a href="('transitions') }}">All Transitions</a></li>
                                <li><a href="('slidetitles') }}">Orientation Titles</a></li>
                                <li><a href="('slideinfos') }}">Orientation Infos</a></li> -->
                                <li class="{{ request () -> routeIs ( 'slides' ) ? 'active' : '' }}"><a href="{{ route('slides') }}">All Slides</a></li>
                                <li class="{{ request () -> routeIs ( 'slide.create' ) ? 'active' : '' }}"><a href="{{ route('slide.create') }}">New Slide</a></li>
                                <li class="{{ request () -> routeIs ( 'slides.trashed' ) ? 'active' : '' }}"><a href="{{ route('slides.trashed') }}">Trashed Slides</a></li>
                            </ul>
                        </li>
                        <li class="{{ request () -> routeIs ( 'partners', 'partner.create' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="fa fa-handshake-o"></i><span>Partners</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'partners' ) ? 'active' : '' }}"><a href="{{ route('partners') }}">All Partners</a></li>
                                <li class="{{ request () -> routeIs ( 'partner.create' ) ? 'active' : '' }}"><a href="{{ route('partner.create') }}">New Partner</a></li>
                            </ul>
                        </li>
                        <li class="{{ request () -> routeIs ( 'activityzones', 'activityzone.create' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-docs"></i><span>Zones</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'activityzones' ) ? 'active' : '' }}"><a href="{{ route('activityzones') }}">All Zones</a></li>
                                <li class="{{ request () -> routeIs ( 'activityzone.create' ) ? 'active' : '' }}"><a href="{{ route('activityzone.create') }}">New Zone</a></li>
                            </ul>
                        </li>

                        <li class="{{ request () -> routeIs ( 'services', 'service.create', 'services.trashed' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-folder"></i><span>Services</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'services' ) ? 'middle active' : '' }}"><a href="{{ route('services') }}">All Services</a></li>
                                <li class="{{ request () -> routeIs ( 'service.create' ) ? 'middle active' : '' }}"><a href="{{ route('service.create') }}">New Service</a></li>
                            </ul>
                        </li>

                        <li class="{{ request () -> routeIs ( 'projects', 'project.create', 'projects.trashed' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-folder"></i><span>Projects</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'projects' ) ? 'middle active' : '' }}"><a href="{{ route('projects') }}">All Projects</a></li>
                                <li class="{{ request () -> routeIs ( 'project.create' ) ? 'middle active' : '' }}"><a href="{{ route('project.create') }}">New Project</a></li>
                                <li class="{{ request () -> routeIs ( 'projects.trashed' ) ? 'middle active' : '' }}"><a href="{{ route('projects.trashed') }}">Trashed Projects</a></li>
                            </ul>
                        </li>


                        <li class="{{ request () -> routeIs ( 'users', 'user.create', 'user.profile' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-user"></i><span>USER</span></a>
                            <ul>
                                @if (Auth::user()->admin)
                                    <li class="{{ request () -> routeIs ( 'users' ) ? 'middle active' : '' }}"><a href="{{ route('users') }}">All Users</a></li>
                                    <li class="{{ request () -> routeIs ( 'user.create' ) ? 'middle active' : '' }}"><a href="{{ route('user.create') }}">New User</a></li>
                                @endif
                                <li class="{{ request () -> routeIs ( 'user.profile' ) ? 'middle active' : '' }}"><a href="{{ route('user.profile') }}">My Profile</a></li>
                            </ul>
                        </li>

                        @if (Auth::user()->admin)
                            <li class="{{ (request()->segment(2) == 'settings') ? 'active': ''}}"><a href="{{ route('settings') }}"><i class="icon-settings"></i><span>Settings</span></a></li>
                        @endif
                        <li class="heading">Blog Elements</li>
                        <li class="{{ request () -> routeIs ( 'posts', 'post.create', 'posts.trashed' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-paper-plane"></i><span>POST</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'posts' ) ? 'middle active' : '' }}"><a href="{{ route('posts') }}">All Posts</a></li>
                                <li class="{{ request () -> routeIs ( 'post.create' ) ? 'middle active' : '' }}"><a href="{{ route('post.create') }}">New Post</a></li>
                                <li class="{{ request () -> routeIs ( 'posts.trashed' ) ? 'middle active' : '' }}"><a href="{{ route('posts.trashed') }}">Trashed Posts</a></li>
                            </ul>
                        </li>
                        <li class="{{ request () -> routeIs ( 'categories', 'category.create' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-list"></i><span>CATEGORY</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'categories' ) ? 'middle active' : '' }}"><a href="{{ route('categories') }}">All Categories</a></li>
                                <li class="{{ request () -> routeIs ( 'category.create' ) ? 'middle active' : '' }}"><a href="{{ route('category.create') }}">New Category</a></li>
                            </ul>
                        </li>
                        <li class="{{ request () -> routeIs ( 'tags', 'tag.create' ) ? 'middle active' : '' }}">
                            <a href="#uiElements" class="has-arrow"><i class="icon-tag"></i><span>TAG</span></a>
                            <ul>
                                <li class="{{ request () -> routeIs ( 'tags' ) ? 'middle active' : '' }}"><a href="{{ route('tags') }}">All Tags</a></li>
                                <li class="{{ request () -> routeIs ( 'tag.create' ) ? 'middle active' : '' }}"><a href="{{ route('tag.create') }}">New Tag</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    @endif

    @yield('content')

</div>

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/bundles/chartist.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob-->
<script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script> <!-- flot charts Plugin Js -->
<script src="{{ asset('assets/vendor/flot-charts/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/vendor/parsleyjs/js/parsley.min.js') }}"></script>
<script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>


<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index.js') }}"></script>

@yield('script')

<script>
    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
    @endif

    @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
    @endif
</script>

@yield('styles')
@yield('scripts')
<script>
    $(document).ready(function() {
        $('#detail').summernote();
    });
    $(document).ready(function() {
        $('#detailb').summernote();
    });
</script>
</body>
</html>
