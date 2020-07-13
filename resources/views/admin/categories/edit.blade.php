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
                        <li class="breadcrumb-item"><a href="{{ route('categories') }}">Categories</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <h2>Update Category: {{ $category->name }}</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('category.update', ['id' => $category->id]) }}" method="post" novalidate>
                            {{ csrf_field() }}
                            <div class="tab-content">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#English"><i><img src="{{ asset('assets/images/en.png') }}"></i> English Version</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Français"><i><img src="{{ asset('assets/images/fr.png') }}"></i> Version Française</a></li>
                                </ul>
                                <div class="tab-pane show active" id="English">
                                    <p>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
                                        </div>
                                    </p>
                                </div>
                                <div class="tab-pane" id="Français">
                                    <p>
                                        <div class="form-group">
                                            <label>Nom</label>
                                        <input type="text" name="namefr" value="{{ $category->namefr }}" class="form-control" required>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update category</button>
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
            $('#category').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection
