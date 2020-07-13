@extends('layouts.backend')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2>Services</h2>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
                <div class="header">
                    <h2>Services List</h2>
                    <ul class="header-dropdown">
                        <li><a href="{{ route('service.create') }}" class="btn btn-default"><i class="fa fa-plus-square"></i>&emsp;<strong>Add</strong></a></li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Services Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @if ($services->count() > 0)
                                        <?php
                                            $i = 1;
                                        ?>
                                        @foreach ($services as $service)
                                            <tr>
                                                <td >{{ $i++ }}</td>
                                                <td><img src="{{ $service->featured }}" width="80px" height="50px"></td>
                                                <td>
                                                        <p class="c_name">{{ $service->name }}</p>
                                                </td>
                                                    <td>
                                                        <button type="button" onclick="window.location.href='{{ route('service.edit', $service->id) }}' " class="btn btn-link btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                        <button type="button" data-type="confirm" onclick="window.location.href='{{ route('service.delete', $service->id) }}' " class="btn btn-link btn-sm js-sweetalert" title="Trash"><i class="fa fa-trash-o text-danger"></i></button>
                                                    </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <th colspan="5" class="text-center"><h3>No published services</h3></th>
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
