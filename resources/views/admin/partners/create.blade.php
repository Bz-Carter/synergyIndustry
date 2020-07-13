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
                        <li class="breadcrumb-item"><a href="{{ route('partners') }}">Partners</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>New Partner</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('partner.store') }}" method="post" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Store Partner</button>
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
    <script src="../assets/vendor/summernote/dist/summernote.js"></script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
@endsection
