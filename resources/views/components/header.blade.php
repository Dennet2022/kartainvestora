<div>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar navbar-light navbar-fixed-top navbar-header" role="navigation">
            <a class="navbar-brand" href="/">Karta_investora</a>
            <span class="moon dark-mode-toggle" id="dark-mode-toggle">
                <img src="/static/my_app/images/moon.svg" alt="Dark mode" id="moon">
            </span>
            <div>
                @guest
                    <div>
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn-login">Логин</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-register">Регистрация</a>
                        @endif
                    </div>
                @else
                    <div>
                        <a href="/" class="btn-login">{{ Auth::user()->name }}</a>
                        <a class="btn-register" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"
                        >
                            Выход
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
            <!-- Right Side Of Navbar -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</div>
