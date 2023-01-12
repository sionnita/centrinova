@if (Session::has('failed'))
    <div class="alert alert-danger" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <i class="fas fa-window-close"></i>
        </button>
        {{ Session::get('failed') }}
    </div>
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
