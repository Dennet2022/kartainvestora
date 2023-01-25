@extends('layouts.app')

@section('content')
    <!--start wrapper-->
    <div class="wrapper">

        <a onclick="window.history.back()">
            <div class="d-flex align-items-center p-2 cursor-pointer" style="font-size:16px;">
                <div class="font-22">	<i class="lni lni-chevron-left"></i>
                </div>
                <div class="ms-2">	<span>Назад</span>
                </div>
            </div>
        </a>

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                                <img src="assets/images/error/login-img.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Вход</h5>
                                    <form class="form-body" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        {{--                                        <div class="d-grid">--}}
                                        {{--                                            <a class="btn btn-white radius-30" href="javascript:;">--}}
                                        {{--                                                <span--}}
                                        {{--                                                    class="d-flex justify-content-center align-items-center">--}}
                                        {{--                                                    <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="">--}}
                                        {{--                                                    <span>Sign in with Google</span>--}}
                                        {{--                                                </span>--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="login-separater text-center mb-4"><span>OR SIGN IN WITH EMAIL</span>--}}
                                        {{--                                            <hr>--}}
                                        {{--                                        </div>--}}
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </div>
                                                    <input id="email" type="email"
                                                           class="form-control radius-30 ps-5 @error('email') is-invalid @enderror"
                                                           name="email"
                                                           value="{{ old('email') }}"
                                                           required autocomplete="email" autofocus
                                                           placeholder="Email">
                                                </div>
                                                @error('email')
                                                <span class="invalid-feedback display-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Пароль</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i></div>
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror radius-30 ps-5"
                                                           name="password" required autocomplete="current-password"
                                                           placeholder="Пароль">
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback display-block" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                           id="flexSwitchCheckChecked"
                                                           {{ old('remember') ? 'checked' : '' }} name="remember">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">
                                                        Запомнить меня
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6 text-end">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        Забыли пароль?
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">Войти
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-0">
                                                    Ещё нет аккаунта?
                                                    <a href="{{ route('register') }}">
                                                        Зарегистрируйтесь
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->


    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>
@endsection
