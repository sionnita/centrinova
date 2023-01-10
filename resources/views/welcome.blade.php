@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "Dashboard"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "Dashboard", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="content flex-lg-row-fluid ms-lg-7 ms-xl-10 align-items-center" id="kt_content">

        <div class="d-flex flex-column border-bottom px-8 min-h-50px">
            <!--begin::Label-->
            <div class="text-dark fw-bolder w-75px">Title:</div>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control-lg form-control-solid" name="compose_to" value="" data-kt-inbox-form="tagify" />
            <!--end::Input-->
            <!--begin::CC & BCC buttons-->

            <div class="text-dark fw-bolder w-75px">Content:</div>
            <!--end::Label-->

            <textarea class="ckeditor form-control" name="wysiwyg-editor" placeholder="Content"></textarea>
        </div>
        <!--end::Post-->
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
