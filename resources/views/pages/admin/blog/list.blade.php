@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "List Blog"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "List Blog", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="main-content">
        <div class="col-12">
            <div class="card border border-primary text-white-50 col-xl-10 d-flex " style="margin: 20px;">
            <!-- Table Responsive -->
                <div class="card-header bg-soft-purple  d-flex">
                    <h4 class="card-title text-white col-10">List Blog</h4>
                    <div class=" col-2 ">
                    <a type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1" href="{{url('blog/insert')}}"><i
                            class="bx bx-add-to-queue"></i></a>
                    </div>
                </div><!-- end card header -->
                <div class="row">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="3%">#</th>
                        <th width="30%">Title</th>
                        <th width="30%" >Content</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($data as $value)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$value->title}}</td>
                            <td>{!! substr(strip_tags($value->content),0,100) !!}</td>
                            <td class="text-center">
                                <span class="badge p-1 badge-soft-info">{{$value->status}}</span>
                            </td>
                            <td class="text-center">
                                <span class="badge p-1 badge-info">New</span>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No data available in table</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            {!! $data->appends(['status'=>request()->status,'search'=>request()->search])->render() !!}
        </div>
        <!-- End Form Layout -->
            </div>
    </div>
    </div>

    <!--end::Content-->
@endsection

