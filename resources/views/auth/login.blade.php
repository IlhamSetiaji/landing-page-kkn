<!DOCTYPE html>
<html lang="en">

<head>
    @include('stisla.head')
</head>

<body>
    <div id="app">
        <section class="section">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ $error }}
                </div>
            </div>
            @endforeach
            @endif
            @if (session('status'))
            <div class="alert alert-warning alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session('status') }}
                </div>
            </div>
            @endif
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="{{ asset('assets/img/logolumajang.png') }}" alt="logo" width="200"
                            class="shadow-light rounded-circle mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Desa Darungan</span>
                        </h4>
                        <p class="text-muted">Before you get started, you must login or register if you don't already
                            have an account.</p>
                        <form method="POST" action="{{ url('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2"
                                    value="{{ old('password') }}" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                {{-- @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="float-left mt-3">
                                Forgot Password?
                                </a>
                                @endif --}}
                                <a href="{{ url('register') }}" class="float-left mt-3">
                                    Belum punya akun? Daftar sekarang!
                                </a>
                                <a href="https://wa.me/6281347806381" target="_blank" class="float-left mt-3">
                                    <i class="fas fa-question-circle"></i>
                                    Butuh bantuan? Klik link ini!
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-5 text-small">
                            Copyright &copy; Desa Darungan. Made with ???? by Delsa Alfannia
                            <div class="mt-2">
                                <a href="#">Privacy Policy</a>
                                <div class="bullet"></div>
                                <a href="#">Terms of Service</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="{{ asset('assets/img/farmroad.png') }}">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">Desa Darungan</h1>
                                <h5 class="font-weight-normal text-muted-transparent">Yosowilangun, Lumajang</h5>
                            </div>
                            Photo by <a class="text-light bb" target="_blank"
                                href="https://unsplash.com/photos/aqJ2W6sfYxI">Delsa Alfannia</a> on <a
                                class="text-light bb" target="_blank" href="https://unsplash.com">KKN 473 Darungan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('stisla.script')
</body>

</html>
