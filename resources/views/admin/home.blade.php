@extends('layouts.backend')

@section('content')
    <!-- content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Références Statistics</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                <h5>{{ $services->count() }}</h5>
                                    <span>Services</span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <h5>{{ $projects->count() }}</h5>
                                    <span>Projects</span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <h5>{{ $trashed_projects }}</h5>
                                    <span>Trashed Projects</span>
                                </div>
                            </div>
                            <div id="line_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <strong><h5>Posted</h5></strong>
                            <hr>
                            <h4>{{ $posts->count() }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <strong><h5>Trashed Posts</h5></strong>
                            <hr>
                            <h4>{{ $trashed_posts }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <strong><h5>Users</h5></strong>
                            <hr>
                            <h4>{{ $users_count }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <strong><h5>Categories</h5></strong>
                            <hr>
                            <h4>{{ $categories->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
