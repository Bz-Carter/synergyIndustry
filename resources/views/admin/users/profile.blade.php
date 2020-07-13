@extends('layouts.backend')

@section('content')

<div id="main-content" class="profilepage_2 blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>My Profile</h2>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                            @if (Auth::user()->admin)
                                <li class="breadcrumb-item"><a href="{{ route('users') }}">Users</a></li>
                            @endif
                            <li class="breadcrumb-item active">My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="profile-image"> <img src="{{asset( $user->profile->avatar )}}" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0"><strong>Samuel</strong> Morris</h4>
                                <span>Washington, d.c.</span>
                                <p class="font-14 m-b-0 m-t-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            </div>
                            <div class="m-t-15">
                                <button class="btn btn-outline-secondary"><i class="fa fa-envelope"></i> Message</button>
                            </div>
                            <div class="border-top p-t-20 m-t-20 text-left">
                                <ul class="list-unstyled profile-social">
                                    <li><a class="text-col-dark" href="javascript:void(0);"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i> Instagram</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                            <ul class="header-dropdown">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>+ 202-555-2828</p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0">October 22th, 1990</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8 col-md-12">

                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Overview">Overview</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings">Settings</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content padding-0">

                        <div class="tab-pane active" id="Overview">
                            <div class="card">
                                <div class="body">
                                    <div class="new_post">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                        <div class="post-toolbar-b">
                                            <button class="btn btn-warning"><i class="icon-link"></i></button>
                                            <button class="btn btn-warning"><i class="icon-camera"></i></button>
                                            <button class="btn btn-primary">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single_post">
                                <div class="body">
                                    <div class="blog-top d-flex clearfix">
                                        <div class="short-name">
                                            <span>JD</span>
                                        </div>
                                        <h4 class="name">John Doe</h4>
                                        <h5 class="time">2h</h5>
                                    </div>
                                    <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                                    <div class="img-post">
                                        <img class="d-block img-fluid" src="{{asset('assets/images/blog/blog-page-1.jpg')}}" alt="First slide">
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                </div>
                                <div class="footer">
                                    <div class="actions">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                                    </div>
                                    <ul class="stats">
                                        <li><a href="javascript:void(0);">General</a></li>
                                        <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                                        <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card single_post">
                                <div class="body">
                                    <div class="blog-top d-flex clearfix">
                                        <div class="short-name">
                                            <span>JD</span>
                                        </div>
                                        <h4 class="name">John Doe</h4>
                                        <h5 class="time">2h</h5>
                                    </div>
                                    <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                                    <div class="img-post">
                                        <img class="d-block img-fluid" src="{{asset('assets/images/blog/blog-page-2.jpg')}}" alt="">
                                    </div>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                </div>
                                <div class="footer">
                                    <div class="actions">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                                    </div>
                                    <ul class="stats">
                                        <li><a href="javascript:void(0);">General</a></li>
                                        <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                                        <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="Settings">

                            <div class="card">
                                    @include('admin.includes.errors')
                                <div class="body">
                                    <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12">
                                                <h6>Account Data</h6>
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Email">
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="avatar" class="custom-file-input" >
                                                        <label class="custom-file-label" >Choose avatar</label>
                                                    </div>
                                                </div>

                                                <h6>Change Password</h6>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="facebook" class="form-control" value="{{ $user->profile->facebook }}" placeholder="facebook profile">
                                                </div>
                                                <div class="form-group">
                                                <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}" placeholder="youtube profile">
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">about you</span>
                                                        </div>
                                                    <textarea class="form-control" name="about" aria-label="about you">{{ $user->profile->about }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
<script>
        $(function () {
            $('.knob').knob({
                draw: function () {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') {

                        var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = true;

                        this.g.lineWidth = this.lineWidth;

                        this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                        if (this.o.displayPrevious) {
                            ea = this.startAngle + this.angle(this.value);
                            this.o.cursor
                                && (sa = ea - 0.3)
                                && (ea = ea + 0.3);
                            this.g.beginPath();
                            this.g.strokeStyle = this.previousColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                        return false;
                    }
                }
            });
        });
    </script>
@endsection
