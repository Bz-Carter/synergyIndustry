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
                        <li class="breadcrumb-item"><a href="{{ route('slideinfos') }}">slideinfos</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <h2>Update Slideinfo: {{ $slideinfo->title }}</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('slideinfo.update', ['id' => $slideinfo->id]) }}" method="post" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{ $slideinfo->title }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Data</label>
                                <textarea class="form-control" name="data" rows="5" cols="30" required>{{ $slideinfo->data }}</textarea>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update Slideinfo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(function() {
            // validation needs name of the element
            $('#slideinfo').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection
