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
                        <li class="breadcrumb-item"><a href="{{ route('posts') }}">Posts</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    <h2>Edti Post: {{ $post->title }}</h2>
                    </div>
                    @include('admin.includes.errors')
                    <div class="body">
                    <form id="basic-form" action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data" novalidate>
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
                                            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="summernote" name="description" rows="5" cols="10" required>{{ $post->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="summernote" name="content" rows="5" cols="30" required>{{ $post->content }}</textarea>
                                        </div>
                                    </p>
                                </div>
                                <div class="tab-pane" id="Français">
                                    <p>
                                        <div class="form-group">
                                            <label>Titre</label>
                                            <input type="text" name="titlefr" class="form-control" value="{{ $post->titlefr }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="summernote" name="descriptionfr" rows="5" cols="10" required>{{ $post->descriptionfr }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="summernote" name="contentfr" rows="5" cols="30" required>{{ $post->contentfr }}</textarea>
                                        </div>
                                    </p>
                                </div>
                            </div>

                           <div class="form-group">
                                <label for="category">Select a category</label>
                                <br/>
                                <select id="category" name="category_id" class="multiselect-custom" data-parsley-required data-parsley-trigger-after-failure="change" data-parsley-errors-container="#error-multiselect">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($post->category->id == $category->id)
                                                    selected
                                                @endif
                                            >{{ $category->name }}</option>
                                        @endforeach
                                </select>
                                <p id="error-multiselect"></p>
                            </div>
                            <div class="form-group">
                                <label>Choose Tags</label>
                                <br/>
                                @foreach ($tags as $tag)
                                    <label class="fancy-checkbox">
                                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                          @foreach ($post->tags as $t)
                                              @if ($tag->id == $t->id)
                                                  checked
                                              @endif
                                          @endforeach
                                         required data-parsley-errors-container="#error-checkbox">
                                        <span>{{ $tag->tag }}</span>
                                    </label>
                                 @endforeach
                                <p id="error-checkbox"></p>
                            </div>
                            <div class="form-group">
                                <label>Featured image</label>
                                <input type="file" name="featured" class="form-control">
                                <span class="help-block">image resolution: 1000 X 610</span>
                            </div>

                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">update post</button>
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
            $('#category').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection
