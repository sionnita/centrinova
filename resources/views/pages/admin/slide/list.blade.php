@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "Slide Image"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "Slide Image", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="main-content">
        <div class="col-12">
            <div class="col-xl-12 align-items-center">
                @include('layouts.alert')
                <div class="card bg-purple text-white-50 " style="margin: 20px;">
                    <div class="card-header bg-purple text-white justify-content-between d-flex align-items-center">
                        <h4 class="card-title text-white">Add Slide Image</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <form method="POST" action="{{url('slides/save')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-4" id="image-upload">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Image</label>
                                        <input type="file" class="form-control-file" id="basicInputFile" name="image">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>

                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form><!-- end form -->
                    </div>
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="card">
            <div class="col-lg-4 col-md-6"  style="margin: 20px;">
                <h4 class="card-title text-primary">Slide Image</h4>
            </div>
                <div class="row">
                @foreach($slide as $value)
                    <div class="col-lg-4 col-md-6"  style="margin-bottom: 20px;">
                        <div class="card border-primary row" style="margin: 20px;">
                            <div class="card-header border-primary d-flex align-items-end">
                                @if($value->status == "view")
                                    <a type="button" class="btn-sm btn-icon btn-primary mr-1 mb-1 mt-2" href="{{ route('slides.status', $value->id) }}">
                                        <i class="bx bx-pencil"></i> Hidden
                                    </a>
                                @else
                                    <a type="button" class="btn-sm btn-icon btn-success mr-1 mb-1 mt-2" href="{{ route('slides.status', $value->id) }}"><i
                                            class="bx bx-pencil"></i> View</a>
                                @endif
                            </div><!-- end card header -->
                            <div class="card-body row">
                                <div class="single-latest-blog">
                                    <img src="{{$value -> images == null || $value -> images == "" ?
                                            asset('assets/images/small/img-11.jpg') : asset($value -> images)}}"
                                         style="height: 200px;width: auto;" alt="" />

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
                {!! $slide->render("pagination::bootstrap-4") !!}
            </div>
        </div>
    </div>

    <!--end::Content-->
@endsection

