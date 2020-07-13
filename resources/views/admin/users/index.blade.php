@extends('layouts.backend')

@section('content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2>Users</h2>
                </div>            
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <ul class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">Users</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
                <div class="header">
                    <h2>Users List</h2>
                    <ul class="header-dropdown">
                        @if (Auth::user()->admin)
                            <li><a href="{{ route('user.create') }}" class="btn btn-default"><i class="fa fa-plus-square"></i>&emsp;<strong>Add</strong></a></li>
                        @endif
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0 c_list">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Permissions</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @if ($users->count() > 0)
                                        <?php
                                            $i = 1;
                                        ?>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                        <img src="{{ asset($user->profile->avatar) }}" class="rounded avatar" alt="">
                                                        <p class="c_name"><span>{{ $user->name }}</span></p>
                                                </td>
                                                <td>
                                                    @if ($user->admin)
                                                        <a href="{{route('user.not.admin', $user->id)}}" class="btn btn-xs btn-danger">Remove permissons</a>
                                                    @else
                                                        <a href="{{route('user.admin', $user->id)}}" class="btn btn-xs btn-default">Make admin</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (Auth::id() !== $user->id)
                                                        <button type="button" onclick="window.location.href='{{ route('user.delete', $user->id) }}' " class="btn btn-link btn-sm js-sweetalert" title="Delete" ><i class="fa fa-trash-o text-danger"></i></button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <th colspan="5" class="text-center"><h3>No users</h3></th>
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