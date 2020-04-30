<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
 
<!--=================================================
Navbar
==================================================-->
 
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
  <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
  <div class="navbar-header">
  <!-- タイトルなどのテキスト -->
  <a class="navbar-brand" href="#">@yield('title')</a>
  </div>
  </div>
</nav>
 
<div class="container" style="margin-top: 40px;">
    @yield('content')
</div>
 
<footer class="footer">
  <div class="container">
  <p class="text-muted">@yield('title')</p>
  </div>
</footer>
 
@yield('scripts')
</body>
</html>
