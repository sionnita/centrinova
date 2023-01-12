@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "Dashboard"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "Dashboard", "title"=> "Welcome !"])

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">

                    <div class="card">
                        <div class="card-body pb-2">
                            <div class="d-flex align-items-start mb-4 mb-xl-0">
                                <div class="flex-grow-1">
{{--                                    <h5 class="card-title">Comment</h5>--}}
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <img src="{{asset('assets/images/maintenance.png')}}" alt=""/>

                            </div>

                        </div>


                    </div>



                </div><!-- end row-->





            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
@endsection

@section('page-scripts')

@endsection
