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
                        <li class="breadcrumb-item"><a href="{{ route('projects') }}">Projects</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>New Project</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('project.store') }}" method="post" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Client</label>
                                <input type="text" name="client" class="form-control" required>
                            </div>
                            <br>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#English"><i><img src="{{ asset('assets/images/en.png') }}"></i> English Version</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Français"><i><img src="{{ asset('assets/images/fr.png') }}"></i> Version Française</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="English">
                                    <p>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="5" cols="30" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>About</label>
                                            <textarea class="summernote" name="about" rows="5" cols="30" required></textarea>
                                        </div>
                                    </p>
                                </div>
                                <div class="tab-pane" id="Français">
                                    <p>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="descriptionfr" rows="5" cols="30" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>A propos</label>
                                            <textarea class="summernote" name="aboutfr" rows="5" cols="30" required></textarea>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="service">Select a service</label>
                                <br/>
                                <select id="service" name="service_id" class="multiselect multiselect-custom" >
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                </select>
                                <p id="error-multiselect"></p>
                            </div>

                            <div class="form-group">
                                <label>Created at</label>
                                <input type="date" name="dateproject" id="dateproject" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Image 01</label>
                                <input type="file" name="image_01" class="form-control" required>
                                <span class="help-block">image resolution: 1170 X 720</span>
                            </div>
                            <div class="form-group">
                                <label>Image 02</label>
                                <input type="file" name="image_02" class="form-control" required>
                                <span class="help-block">image resolution: 1170 X 720</span>
                            </div>
                            <div class="form-group">
                                <label>Image 03</label>
                                <input type="file" name="image_03" class="form-control" required>
                                <span class="help-block">image resolution: 1170 X 720</span>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Store project</button>
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
            $('#service').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
@endsection
