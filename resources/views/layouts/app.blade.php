<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FitnessMap</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white rounded-bottom">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('gyms.index') }}">
                        {{ config('app.name', 'FitnessMap') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="#">home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">link</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">link</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">リンク1</a>
                                <a class="dropdown-item" href="#">リンク2</a>
                                <a class="dropdown-item" href="#">リンク3</a>
                              </div>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            @if (Auth::check()) {{-- ログインユーザーのみに表示される --}}
                                <li class="nav-item">
                                 <a class="nav-link" href="{{ route('gym_contents.create') }}">新規作成</a>
                                </li>
                                <li class="nav-item">
                                 <a class="nav-link" href="{{ route('fitnessmap.mypage') }}">マイページ</a>
                                </li>
                            @endif
                            @can('system-only') {{-- システム管理者権限のみに表示される --}}
                                <li class="nav-item">
                                 <a class="nav-link" href="#">管理者</a>
                                </li>
                            @endcan
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('header')
        </header>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container">
                <ui class="float-right list-inline text-muted my-2">
                    <li class="list-inline-item">
                        <small>&copy; 2020 FitnessMap</small>
                    </li>
                </ui>
            </div>
        </footer>
    </div>
    @yield('script')
</body>
</html>
