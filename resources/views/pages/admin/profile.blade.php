@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "Profile"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "Profile", "title"=> "Welcome !"])
    <!--begin::Content-->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @include('layouts.alert')
        <div class="row">


            <div class="col-xl-12">
                <div class="card bg-purple text-white-50 col-xl-7 d-flex" style="margin: 20px;">
                    <div class="card-header bg-purple text-white justify-content-between d-flex align-items-center">
                        <h4 class="card-title text-white">Edit Profile</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <form class="form-horizontal form-label-left" action="{{route('profile.update_profile')}}" method="POST">
                            @csrf

                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label"> Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="name" name="name" value="{{ucfirst($user->name)}}" type="text"
                                           placeholder="Name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9"><input class="form-control" id="email" name="email"  readonly
                                                             value="{{$user->email}}" type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label"> Phone Number</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="phone_number" name="phone_number"  value="{{$user->phone_number}}"
                                           type="number" placeholder="Phone Number">
                                </div>
                            </div>


                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Edit</button>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card bg-purple text-white-50 col-xl-7 d-flex" style="margin: 20px;">
                    <div class="card-header bg-purple text-white justify-content-between d-flex align-items-center">
                        <h4 class="card-title text-white">Edit Password</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <form class="form-horizontal form-label-left" action="{{route('profile.update_password')}}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label"> Old Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="username" type="password"
                                           placeholder="Old Password" name="old_password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label"> New Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="username" type="password"
                                           placeholder="New Password" name="new_password">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label"> Confirm Password</label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="username" type="password"
                                           placeholder="Confirm Password"  name="confirm_password">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Edit</button>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-scripts')
@endsection
