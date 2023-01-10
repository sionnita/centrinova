@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "Add Blog"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "List Blog", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="main-content">
        <div class="row">


            <div class="col-xl-12 align-items-center">
                @include('layouts.alert')
                <div class="card bg-purple text-white-50 col-xl-10 d-flex " style="margin: 20px;">
                    <div class="card-header bg-purple text-white justify-content-between d-flex align-items-center">
                        <h4 class="card-title text-white">Add Blog</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <form method="POST" action="{{url('blog/save')}}">
                            @csrf
                            <div class="row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="horizontal-email-input"
                                           placeholder="Title" name="title" >
                                </div>
                            </div><!-- end row -->

                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Content</label>
                                <textarea class="ckeditor form-control col-9" name="wysiwyg_editor" placeholder="Content"></textarea>
                            </div><!-- end row -->

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
        </div><!-- end row -->
        <!-- End Form Layout -->
    </div>

    <!--end::Content-->
@endsection


@section('page-scripts')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
