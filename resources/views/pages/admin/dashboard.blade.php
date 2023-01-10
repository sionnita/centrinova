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
                                    <h5 class="card-title">Profit Daily</h5>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-xl-2">
                                    <div class="card bg-light mb-0">
                                        <div class="card-body">
                                            <div class="py-2">
                                                <h5>Last Profit:</h5>
                                                <h2 class="mt-4 pt-1 mb-1">%</h2>
                                                <p class="text-muted font-size-15 text-truncate"></p>




                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-8">
                                    <div>
                                        <div id="line_chart_basic" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>



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
