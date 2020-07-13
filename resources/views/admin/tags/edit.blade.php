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
                        <li class="breadcrumb-item"><a href="{{ route('tags') }}">Tags</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <h2>Update tag: {{ $tag->tag }}</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post" novalidate>
                            {{ csrf_field() }}
                            <div class="tab-content">
                                <div class="tab-pane show active" id="English">
                                    <p>
                                        <div class="form-group">
                                            <label>Tag</label>
                                            <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control" required>
                                        </div>
                                    </p>
                                </div>
                                <div class="tab-pane" id="Français">
                                    <p>
                                        <div class="form-group">
                                            <label>Mot Clé</label>
                                            <input type="text" name="tagfr" value="{{ $tag->tagfr }}" class="form-control" required>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update tag</button>
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
