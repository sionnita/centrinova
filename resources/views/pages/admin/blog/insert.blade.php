@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "Add Blog"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "Add Blog", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="main-content">
        <div class="row">


            <div class="col-xl-12 align-items-center">
                @include('layouts.alert')
                <div class="card bg-purple text-white-50 col-xl-10 d-flex " style="margin: 20px;">
                    <div class="card-header bg-purple text-white justify-content-between d-flex align-items-center">
                        <h4 class="card-title text-white">{{$type == 'update'? 'Edit':'Add'}} Blog</h4>

                    </div><!-- end card header -->
                    <div class="card-body">
                        <form method="POST" action="{{$type == 'update'?url('blog/update'):url('blog/save')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control" id="horizontal-email-input"
                                   placeholder="Title" name="id" value="{{$type == 'update'? $blog -> id:''}}" hidden="" >
                            <div class="row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="horizontal-email-input"
                                           placeholder="Title" name="title" value="{{$type == 'update'? $blog -> title:''}}" >
                                </div>
                            </div><!-- end row -->
                            <div class="row mb-4" id="image-upload">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">Image</label>
                                        <input type="file" class="form-control-file" id="basicInputFile" name="image">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">

                                    <img class="w-20px h-20px" src="{{$type == "update"? asset($blog->image) : null}}" alt="" height="200px"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Content</label>
                                <textarea class="ckeditor form-control col-9" name="wysiwyg_editor" placeholder="Content" value="{{$type == 'update'? $blog -> title:''}}">{{$type == 'update'? $blog -> content:''}}</textarea>
                            </div><!-- end row -->

                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        @if($type == 'insert')
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        @else
                                            <button type="submit" class="btn btn-primary w-md">Edit</button>
                                        @endif
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

    <script src="{{asset('assets/js/form/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript">
        var image = true;
        $('#image-upload').hide();
        $(document).ready(function () {
            // $('.ckeditor').ckeditor();
            var type = '{{ $type }}';
            // console.log("image");

            if(type == "insert"){
                image = false;
                $('#image-upload').show();
            }
        });

        $('.image-upload-tag').on('click', function () {
            if(image == true){
                image = false;
                $('#image-upload').show();
            }else{
                image = true;
                $('#image-upload').hide();
                document.getElementById("basicInputFile").value = null;
            }
        });
    </script>
@endsection
