@extends('layouts.main')
@section('styles-css')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
@endsection
@section('content')
    @if (Session::has('failed'))
        <div class="alert alert-danger" role="alert">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true"> &times;</span>
            </button>
            {{ Session::get('failed') }}
        </div>
    @endif
<section class="hero-section">
    <div class="hero-items owl-carousel">
        @foreach($slide as $image)
            <div class="single-hero-items set-bg" data-setbg="{{asset($image -> images)}}">

            </div>
        @endforeach
    </div>
</section>
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blog as $value)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="{{$value -> image == null || $value -> image == "" ? asset('assets/images/small/img-11.jpg') : asset($value -> image)}}"
                         style="height: 200px;width: auto;" alt="" />
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                {{date('M d, Y', strtotime($value -> created_at))}}
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div>
                        </div>
                        <a href="{{ route('detail', $value->id) }}">
                            <h4>{{$value -> title}}</h4>
                        </a>
                        <p>{!! substr(strip_tags($value->content),0,200) !!} </p>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
        {!! $blog->render("pagination::bootstrap-4") !!}
    </div>
</section>
@endsection

