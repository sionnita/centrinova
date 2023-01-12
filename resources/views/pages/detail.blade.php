@extends('layouts.main')
@section('styles-css')
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
@endsection
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
<!--begin::Container-->
<div id="kt_content_container" class="container-xxl">
    <!--begin::Post card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-20 pb-lg-0">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-xl-15">
                    <!--begin::Post content-->
                    <div class="mb-17">
                        <!--begin::Wrapper-->
                        <div class="mb-8">
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-6">
                                <!--begin::Item-->
                                <div class="me-9 my-1">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <span class="fw-bolder text-gray-400"> {{date('d M Y', strtotime($blog -> created_at))}}</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->

                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="my-1">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
																		<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
																	</svg>
																</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <span class="fw-bolder text-gray-400">{{$blog -> comment->count()}} Comments</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Title-->
                            <a href="#" class="text-dark text-hover-primary fs-2 fw-bolder">{{$blog -> title}}
                                <span class="fw-bolder text-muted fs-5 ps-1"> <div class="me-9 my-1">
                                    <!--begin::Icon-->
                                        <!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                    <span class="fw-bolder text-gray-400">by {{$blog -> user -> name}}</span>
                                        <!--begin::Label-->
                                </div></span></a>
                            <!--end::Title-->
                            <!--begin::Container-->
                            <div class="overlay mt-8">
                                <!--begin::Image-->
                                <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                                     style="background-image:url({{$blog -> image == null || $blog -> image == "" ? asset('assets/images/small/img-11.jpg') : asset($blog -> image)}})"></div>
                                <!--end::Image-->

                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Description-->
                        <div class="fs-5 fw-bold text-gray-600">
                            {!! $blog->content !!}
                        </div>
                        <!--end::Description-->

                    </div>
                    <!--end::Post content-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
{{--                <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">--}}
{{--                    <!--begin::Search blog-->--}}
{{--                    <div class="mb-16">--}}
{{--                        <h4 class="text-black mb-7">Search Blog</h4>--}}
{{--                        <!--begin::Input group-->--}}
{{--                        <div class="position-relative">--}}
{{--                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->--}}
{{--                            <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">--}}
{{--															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />--}}
{{--																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />--}}
{{--															</svg>--}}
{{--														</span>--}}
{{--                            <!--end::Svg Icon-->--}}
{{--                            <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />--}}
{{--                        </div>--}}
{{--                        <!--end::Input group-->--}}
{{--                    </div>--}}
{{--                    <!--end::Search blog-->--}}
{{--                    <!--begin::Catigories-->--}}
{{--                    <div class="mb-16">--}}
{{--                        <h4 class="text-black mb-7">Categories</h4>--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">--}}
{{--                            <!--begin::Text-->--}}
{{--                            <a href="#" class="text-muted text-hover-primary pe-2">SaaS Solutions</a>--}}
{{--                            <!--end::Text-->--}}
{{--                            <!--begin::Number-->--}}
{{--                            <div class="m-0">24</div>--}}
{{--                            <!--end::Number-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">--}}
{{--                            <!--begin::Text-->--}}
{{--                            <a href="#" class="text-muted text-hover-primary pe-2">Company News</a>--}}
{{--                            <!--end::Text-->--}}
{{--                            <!--begin::Number-->--}}
{{--                            <div class="m-0">152</div>--}}
{{--                            <!--end::Number-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">--}}
{{--                            <!--begin::Text-->--}}
{{--                            <a href="#" class="text-muted text-hover-primary pe-2">Events &amp; Activities</a>--}}
{{--                            <!--end::Text-->--}}
{{--                            <!--begin::Number-->--}}
{{--                            <div class="m-0">52</div>--}}
{{--                            <!--end::Number-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">--}}
{{--                            <!--begin::Text-->--}}
{{--                            <a href="#" class="text-muted text-hover-primary pe-2">Support Related</a>--}}
{{--                            <!--end::Text-->--}}
{{--                            <!--begin::Number-->--}}
{{--                            <div class="m-0">305</div>--}}
{{--                            <!--end::Number-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">--}}
{{--                            <!--begin::Text-->--}}
{{--                            <a href="#" class="text-muted text-hover-primary pe-2">Innovations</a>--}}
{{--                            <!--end::Text-->--}}
{{--                            <!--begin::Number-->--}}
{{--                            <div class="m-0">70</div>--}}
{{--                            <!--end::Number-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack fw-bold fs-5 text-muted">--}}
{{--                            <!--begin::Text-->--}}
{{--                            <a href="#" class="text-muted text-hover-primary pe-2">Product Updates</a>--}}
{{--                            <!--end::Text-->--}}
{{--                            <!--begin::Number-->--}}
{{--                            <div class="m-0">585</div>--}}
{{--                            <!--end::Number-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                    </div>--}}
{{--                    <!--end::Catigories-->--}}
{{--                    <!--begin::Recent posts-->--}}
{{--                    <div class="m-0">--}}
{{--                        <h4 class="text-black mb-7">Recent Posts</h4>--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack mb-7">--}}
{{--                            <!--begin::Symbol-->--}}
{{--                            <div class="symbol symbol-60px symbol-2by3 me-4">--}}
{{--                                <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-1.jpg')"></div>--}}
{{--                            </div>--}}
{{--                            <!--end::Symbol-->--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div class="m-0">--}}
{{--                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">About Bootstrap Admin</a>--}}
{{--                                <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack mb-7">--}}
{{--                            <!--begin::Symbol-->--}}
{{--                            <div class="symbol symbol-60px symbol-2by3 me-4">--}}
{{--                                <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-2.jpg')"></div>--}}
{{--                            </div>--}}
{{--                            <!--end::Symbol-->--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div class="m-0">--}}
{{--                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">A yellow sofa</a>--}}
{{--                                <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack mb-7">--}}
{{--                            <!--begin::Symbol-->--}}
{{--                            <div class="symbol symbol-60px symbol-2by3 me-4">--}}
{{--                                <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-3.jpg')"></div>--}}
{{--                            </div>--}}
{{--                            <!--end::Symbol-->--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div class="m-0">--}}
{{--                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Our Camra Mega Set</a>--}}
{{--                                <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                        <!--begin::Item-->--}}
{{--                        <div class="d-flex flex-stack">--}}
{{--                            <!--begin::Symbol-->--}}
{{--                            <div class="symbol symbol-60px symbol-2by3 me-4">--}}
{{--                                <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-4.jpg')"></div>--}}
{{--                            </div>--}}
{{--                            <!--end::Symbol-->--}}
{{--                            <!--begin::Title-->--}}
{{--                            <div class="m-0">--}}
{{--                                <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Time to cook and eat?</a>--}}
{{--                                <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>--}}
{{--                            </div>--}}
{{--                            <!--end::Title-->--}}
{{--                        </div>--}}
{{--                        <!--end::Item-->--}}
{{--                    </div>--}}
{{--                    <!--end::Recent posts-->--}}
{{--                </div>--}}
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->

            <div class="row">
                <div class="col-xl-10">
                    <div class="mt-4 pt-3">
                        <h5 class="font-size-14 mb-3">Comment : </h5>

                        <div class="border py-10 rounded" style="border-bottom: 1px solid black;">

                            <div class="px-10 comment-list">

                                @foreach($comments as $comment)
                                <div class="">
                                    <p class="float-sm-end text-muted font-size-13">{{date('d M Y', strtotime($comment -> created_at))}}</p>
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-15 mb-0">{{$comment -> name}}</h5>
                                    </div>
                                    <p class="text-muted mb-4">{{$comment -> comment}}</p>
                                    <div class="d-flex align-items-start">


                                        <div class="flex-shrink-0">
                                            <ul class="list-inline product-review-link mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"><i class="bx bx-like"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"  data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comment"><i class="bx bx-comment-dots"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                @endforeach

                                    {!! $comments->render("pagination::bootstrap-4") !!}
                            </div>
                            <form action="#">
                            <div class="px-4 bg-warning" >
                                <div class="mb-4" style="padding: 20px;">
                                    <div class="row mb-4">
                                        <input id="email" name="blog_id" type="text"value="{{$blog -> id}}" class="form-control" hidden="">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                                            <p id="text-pin" class="text-helper text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input id="email" name="email" type="email" placeholder="Email" class="form-control">
                                            <p id="text-pin" class="text-helper text-danger"></p>
                                        </div>
                                        <div>
                                            <textarea rows="4" class="form-control border-1 resize-none" placeholder="Your Message..." name="comment"></textarea>
                                        </div>
                                    </div>

                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-success w-sm text-truncate ms-2"> Add Comment </button>
                                    </div>
                                </div>
                            </div>
                            </form>

                        </div>

                    </div>
                </div>


            </div>
            <!--end::Section-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Post card-->
</div>
<!--end::Container-->
</div>

@endsection
@section('styles-js')

    <script src="{{asset('js/form/jquery-3.3.1.js')}}"></script>
    <script>

    </script>
@endsection
`
