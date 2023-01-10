@if (Session::has('failed'))
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4 mb-5 mb-sm-0"><i class="fonticon-alarm"></i></span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column pe-0 pe-sm-10">
            <!--begin::Title-->
            <h4 class="fw-semibold">Warning</h4>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ Session::get('failed') }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-1 svg-icon-primary">...</span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
@endif


@if ($errors->has('status'))
    <div class="alert alert-warning" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <i class="fas fa-window-close"></i>
        </button>
        {{ $errors->first('status') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <i class="fas fa-window-close"></i>
        </button>
        Please click on the activation link that we sent. <a class="text-primary" href="{{ Session::get('warning') }}">Resend verification email</a>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif

@if ($errors->any() && !Route::is('register'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="fas fa-window-close"></i>
        </button>
        @foreach ($errors->all() as $error)
            <li style="list-style:none;">{{ $error }}</li>
        @endforeach
    </div>
@endif
