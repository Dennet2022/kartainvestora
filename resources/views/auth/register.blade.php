@extends('layouts.app')

@section('content')
    <!--start wrapper-->
    <div class="wrapper">

        <a onclick="window.history.back()">
            <div class="d-flex align-items-center p-2 cursor-pointer">
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
                                <img src="assets/images/error/register-img.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Регистрация</h5>
                                    <form class="form-body" method="POST" action="{{ route('register') }}">
                                        @csrf
{{--                                        <div class="d-grid">--}}
{{--                                            <a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">--}}
{{--                            <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="">--}}
{{--                            <span>Sign up with Google</span>--}}
{{--                          </span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>--}}
{{--                                            <hr>--}}
{{--                                        </div>--}}
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="name" class="form-label">Никнейм</label>


                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                                                    <input id="name" type="text" class="form-control radius-30 ps-5 @error('name') is-invalid @enderror" name="name"
                                                           value="{{ old('name') }}"
                                                           required autocomplete="name" autofocus placeholder="Никнейм">
                                                </div>
                                                @error('name')
                                                <span class="invalid-feedback display-block" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>

                                                    <input id="email" type="email" class="form-control radius-30 ps-5 @error('email') is-invalid @enderror" name="email"
                                                           value="{{ old('email') }}"
                                                           required autocomplete="email" autofocus placeholder="Email">
                                                    <div>

                                                    </div>
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
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror radius-30 ps-5"
                                                           name="password" required autocomplete="current-password" placeholder="Пароль">
                                                </div>
                                                @error('password')
                                                <span class="invalid-feedback display-block" role="alert">

                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="password-confirm" class="form-label">Пароль ещё раз</label>
                                                <div class="ms-auto position-relative">
                                                    <div
                                                        class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i></div>
                                                    <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror radius-30 ps-5"
                                                           name="password_confirmation" required autocomplete="current-password" placeholder="Пароль">
                                                </div>
                                            </div>
{{--                                            <div class="col-12">--}}
{{--                                                <div class="form-check form-switch">--}}
{{--                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">--}}
{{--                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">Зарегистрироваться</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-0">Уже зарегистрированы? <a href="{{ route('login') }}">Войдите</a></p>
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
@endsection
