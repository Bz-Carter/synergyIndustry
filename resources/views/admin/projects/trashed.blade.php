@extends('layouts.backend')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2>Trashed Projects</h2>
                </div>            
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">Trashed Projects</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
                <div class="header">
                    <h2>All Trashed Projects</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Project Name</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @if ($projects->count() > 0)
                                        <?php
                                            $i = 1;
                                        ?>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td >{{ $i++ }}</td>
                                                <td><img src="{{ $project->image_01 }}" width="80px" height="50px"></td>
                                                <td>
                                                        <p class="c_name">{{ $project->title }}</p>
                                                </td>
                                                
                                                    <td>
                                                        <button type="button" onclick="window.location.href='{{ route('project.restore', $project->id) }}' " class="btn btn-link btn-sm" title="Restore"><i class="fa fa-share text-success"></i></button>
                                                        <button type="button" data-type="confirm" onclick="window.location.href='{{ route('project.kill', $project->id) }}' " class="btn btn-link btn-sm js-sweetalert" title="Delete"><i class="fa fa-times text-danger"></i></button>
                                                    </td>
                                            </tr>
                                        @endforeach
                                    @else

                                        <tr>
                                            <th colspan="5" class="text-center"><h3>No trashed projects</h3></th>
                                        </tr>
                                        
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection