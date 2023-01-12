@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "List Comment"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "List Comment", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="main-content">
        <div class="col-12">
            @include('layouts.alert')
            <div class="card border border-primary text-white-50 d-flex " style="margin: 20px;">
                <!-- Table Responsive -->
                <div class="card-header bg-purple  d-flex">
                    <h4 class="card-title text-white col-10">List Comment</h4>
                    <div class=" col-2 ">

                    </div>
                </div><!-- end card header -->
                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th width="3%">#</th>
                                <th >Name</th>
                                <th >Email</th>
                                <th width="30%" >Comment</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($data as $value)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$value->name}}
                                    </td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->comment}}</td>
                                    <td  class="text-center" >{{date('d M Y', strtotime($value->created_at))}}</td>
                                    <td class="text-center">
                                        @if($value->status == "view")
                                        <span class="badge rounded-pill bg-success">{{$value->status}}</span>
                                        @else
                                            <span class="badge rounded-pill bg-primary">{{$value->status}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                       @if($value->status == "view")
                                            <a type="button" class="btn-sm btn-icon btn-primary mr-1 mb-1 mt-2" href="{{ route('comment.admin.status', $value->id) }}">
                                                <i class="bx bx-pencil"></i> Hidden
                                            </a>
                                           @else
                                            <a type="button" class="btn-sm btn-icon btn-success mr-1 mb-1 mt-2" href="{{ route('comment.admin.status', $value->id) }}"><i
                                                    class="bx bx-pencil"></i> View</a>
                                        @endif
                                        @if(Auth::user() -> hasRole('admin'))
                                        <a type="button" class="btn-sm btn-icon btn-danger mr-1 mb-1 mt-2" href="{{ route('comment.admin.delete', $value->id) }}"><i
                                            class="bx bx-window-close"></i> Delete </a>
                                           @endif
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
                    {!! $data->render("pagination::bootstrap-4") !!}
                </div>
                <!-- End Form Layout -->
            </div>
        </div>
    </div>

    <!--end::Content-->
@endsection

