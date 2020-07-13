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
                        <li class="breadcrumb-item active">Settings</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit Website Settings</h2>
                    </div>
                    
                    @include('admin.includes.errors')

                    <div class="body">
                            <form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-flag"></i></span>
                                        </div>
                                        <input type="text" class="form-control phone-number"  name="site_name" value="{{ $settings->site_name }}" placeholder="Nom de l'entrepise">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-home"></i></span>
                                        </div>
                                        <input type="text" class="form-control phone-number" name="address" value="{{ $settings->address }}" placeholder="Siège">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control phone-number" name="contact_number_1" value="{{ $settings->contact_number_1 }}" placeholder="contact 1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control phone-number" name="contact_number_2" value="{{ $settings->contact_number_2 }}" placeholder="contact 2">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <input type="text" class="form-control email" name="contact_email" value="{{ $settings->contact_email }}" placeholder="adresse email">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                                        </div>
                                        <input type="text" class="form-control facebook" name="facebook" value="{{ $settings->facebook }}" placeholder="Facebook">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-linkedin"></i></span>
                                        </div>
                                        <input type="text" class="form-control facebook" name="linked_in" value="{{ $settings->linked_in }}" placeholder="Linked in">
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input" >
                                            <label class="custom-file-label" >Choose avatar</label>
                                        </div>
                                    </div> -->
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
@endsection