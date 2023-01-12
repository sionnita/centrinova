@extends('layouts.admin.main')
@section('content')
    @include("layouts.admin.title-meta", ["title"=> "List Blog"])
    @include("layouts.admin.horizontal", ["pagetitle"=> "List Blog", "title"=> "Welcome !"])
    <!--begin::Content-->
    <div class="main-content">
        <div class="col-12">
            @include('layouts.alert')
            <div class="card border border-primary text-white-50 d-flex " style="margin: 20px;">
                <!-- Table Responsive -->
                <div class="card-header bg-purple  d-flex">
                    <h4 class="card-title text-white col-10">List Blog</h4>
                    <div class=" col-2 ">
                        <a type="button" class="btn btn-icon rounded-circle btn-outline-light mr-1 mb-1"
                           href="{{url('blog/insert')}}">
                            <i class="bx bx-add-to-queue text-white"></i></a>
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
                                @if(Auth::user() -> hasRole('admin'))
                                <th >Writer</th>
                                @endif
                                <th class="text-center">Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($data as $value)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$value->title}}<br>
                                        <img class="w-20px h-20px" src="{{$value->image? asset($value->image) : null}}" alt="" height="200px"/></td>
                                    <td>{!! substr(strip_tags($value->content),0,200) !!}</td>
                                    @if(Auth::user() -> hasRole('admin'))
                                        <td>{{$value->user->name}}</td>
                                    @endif
                                    <td class="text-center">{{date('d M Y', strtotime($value->created_at))}}</td>
                                    <td class="text-center">
                                        @if($value->status == "view")
                                        <span class="badge rounded-pill bg-success">{{$value->status}}</span>
                                        @else
                                            <span class="badge rounded-pill bg-primary">{{$value->status}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a type="button" class="btn-sm btn-warning mr-1 mb-1 mt-2" href="{{ route('blog.view-update', $value->id) }}"><i
                                                class="bx bx-edit"></i> Edit</a>
                                       @if($value->status == "view")
                                            <a type="button" class="btn-sm btn-icon btn-primary mr-1 mb-1 mt-2" href="{{ route('blog.status', $value->id) }}">
                                                <i class="bx bx-pencil"></i> Hidden
                                            </a>
                                           @else
                                            <a type="button" class="btn-sm btn-icon btn-success mr-1 mb-1 mt-2" href="{{ route('blog.status', $value->id) }}"><i
                                                    class="bx bx-pencil"></i> View</a>
                                        @endif

                                        @if(Auth::user() -> hasRole('admin'))
                                        <a type="button" class="btn-sm btn-icon btn-danger mr-1 mb-1 mt-2" href="{{ route('blog.delete', $value->id) }}"><i
                                            class="bx bx-window-close"></i> Delete </a>
                                        @endif
                                        <a type="button" class="btn-sm btn-icon btn-active-info mr-1 mb-1 mt-2" href="{{ route('comment.admin.list-comment', $value->id) }}"><i
                                                class="bx bx-pen"></i> View Comment <span>{{$value -> comment->count()}}</span> </a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No data available in table</td>
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

