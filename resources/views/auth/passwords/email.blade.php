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
                            <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
                                <img src="{{ url('assets/images/error/forgot-password-frent-img.jpg') }}" class="img-fluid" alt="img">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Восстановление пароля</h5>
                                    <form class="form-body" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="inputEmailid" class="form-label">Email</label>
                                                <div class="col-md-6">

                                                </div>
                                                <input id="email" type="email" class="form-control form-control-lg radius-30 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                            </div>
                                            @error('email')
                                                <span class="invalid-feedback display-block" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                            <div class="col-12">
                                                <div class="d-grid gap-3">
                                                    <button type="submit" class="btn btn-lg btn-primary radius-30">Отправить</button>
                                                    <a href="{{ route('login') }}" class="btn btn-lg btn-light radius-30">Авторизация</a>
                                                </div>
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
