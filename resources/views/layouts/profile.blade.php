@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if (Auth()->user()->avatar)
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('storage') }}{{ '/' }}{{ Auth()->user()->avatar }}"
                                            style="height: 100px" alt="User profile picture">
                                    @else
                                        <div class="profile-user-img img-fluid img-circle d-flex align-items-center justify-content-center"
                                            style="height: 100px">
                                            <h1>
                                                @php
                                                    echo Str::substr(Auth()->user()->name, 0, 1);
                                                @endphp
                                            </h1>
                                        </div>
                                    @endif
                                </div>

                                <h3 class="profile-username text-center">{{ Auth()->user()->name }}</h3>

                                <p class="text-muted text-center">{{ Auth()->user()->roles[0]->name }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ Auth()->user()->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email Verified at</b>
                                        @if (Auth()->user()->email_verified_at)
                                            <a class="float-right">{{ Auth()->user()->email_verified_at }}</a>
                                        @else
                                            <a href="#" class="float-right"><u>Verify Your Mail</u></a>
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        <b>Gender</b> <a
                                            class="float-right">{{ Auth()->user()->gender ? Auth()->user()->gender : 'Not Defined' }}</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Contact</b> <a
                                            class="float-right">{{ Auth()->user()->contact ? Auth()->user()->contact : 'Not Defined' }}</a>
                                    </li>

                                </ul>


                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">

                            <div class="card-body">
                                <form action="{{ route('profile.update', Auth()->user()->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full Name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleInputEmail1" placeholder="Full Name"
                                                value="{{ Auth()->user()->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputPassword1" placeholder="Email"
                                                value="{{ Auth()->user()->email }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select class="form-control select2" name="gender"
                                                        style="width: 100%;">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Other</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Contact</label>
                                                    <input type="number" name="contact" class="form-control"
                                                        id="exampleInputPassword1" placeholder="Contact"
                                                        value="{{ Auth()->user()->contact ? Auth()->user()->contact : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="avatar" class="custom-file-input"
                                                                id="exampleInputFile">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
