@extends('layouts.backend')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Edit</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <h2>Edti Service: {{ $service->title }}</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data" novalidate>
                        {{ csrf_field() }}
                            
                        <br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#English"><i><img src="{{ asset('assets/images/en.png') }}"></i> English Version</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Français"><i><img src="{{ asset('assets/images/fr.png') }}"></i> Version Française</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="English">
                                <p>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="extrait" rows="5" cols="30" required>{{ $service->extrait }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>About</label>
                                        <textarea id="detail" name="detail" required>{{ $service->content }}</textarea>
                                    </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="Français">
                                <p>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="namefr" class="form-control" value="{{ $service->namefr }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="extraitfr" rows="5" cols="30" required>{{ $service->extraitfr }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>A propos</label>
                                        <textarea id="detailb" name="detailb" rows="5" cols="30" required>{{ $service->contentfr }}</textarea>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="featured" class="form-control">
                            <span class="help-block">image resolution: 1170 X 720</span>
                        </div>
                        <br>
                        
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">update service</button>
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
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/dist/summernote.css')}}"/>
@endsection
@section('script')
    <script>
        $(function() {
            // validation needs name of the element
            $('#type').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
@endsection

@section('syles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection