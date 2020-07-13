@extends('layouts.backend')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Create</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('slides') }}">Slides</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>New Slide</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}

                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#English"><i><img src="{{ asset('assets/images/en.png') }}"></i> English Version</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Français"><i><img src="{{ asset('assets/images/fr.png') }}"></i> Version Française</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="English">
                                    <p>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Info</label>
                                            <input type="text" name="info" class="form-control" required>
                                        </div>
                                    </p>
                                </div>
                                <div class="tab-pane" id="Français">
                                    <p>
                                        <div class="form-group">
                                            <label>Titre</label>
                                            <input type="text" name="titlefr" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Info</label>
                                            <input type="text" name="infofr" class="form-control" required>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <br><br>
                            
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="card">
                                       
                                        <div class="body demo-card">
                                            <div class="row clearfix">
                                                
                                                <div class="col-lg-4 col-md-12">
                                                    <label>Select a Orientation Title</label>
                                                        <div class="multiselect_div">
                                                            <select id="slidetitle" name="slidetitle_id" class="multiselect multiselect-custom">
                                                            @foreach ($slidetitles as $slidetitle)
                                                                <option value="{{ $slidetitle->id }}">{{ $slidetitle->title }}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                </div>
                
                                                <div class="col-lg-4 col-md-12">
                                                    <label>Select a orientation Info</label>
                                                    <div class="multiselect_div">
                                                        <select id="slideinfo" name="slideinfo_id" class="multiselect multiselect-custom">
                                                        @foreach ($slideinfos as $slideinfo)
                                                            <option value="{{ $slideinfo->id }}">{{ $slideinfo->title }}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <label>Select a transition</label>
                                                    <div class="multiselect_div">
                                                        <select id="transition" name="transition_id" class="multiselect multiselect-custom">
                                                            @foreach ($transitions as $transition)
                                                            <option value="{{ $transition->id }}">{{ $transition->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-lg-3 col-md-6">
                                    <label>Delay</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-clock"></i></span>
                                        </div>
                                        <input type="number" name="delay" class="form-control time24" min="1" max="10">
                                    </div>
                                </div>
                                <label>Photo</label>
                                <input type="file" name="photo" class="form-control" required>
                                <span class="help-block">IMAGE RESOLUTION !!! :::: 1920 X 500</span>
                                <p id="error-multiselect"></p>
                            </div>
                            <br><br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Store slide</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style')
    <script src="assets/bundles/libscripts.bundle.js"></script>
@endsection

@section('script')
    <script>
        $(function() {
            // validation needs name of the element
            $('#transition').multiselect();
            $('#slidetitle').multiselect();
            $('#slideinfo').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>

    <script src="{{asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script> <!-- Bootstrap Colorpicker Js -->
    <script src="{{asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> <!-- Input Mask Plugin Js -->
    <script src="{{asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
    <script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script> <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{asset('assets/vendor/nouislider/nouislider.js')}}"></script> <!-- noUISlider Plugin Js -->

    <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@endsection
