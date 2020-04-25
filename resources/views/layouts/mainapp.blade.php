<!DOCTYPE html>
<html lang="ja">
<head>
   <title>@yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <h1>@yield('title')</h1>
   @section('menubar')
   <div class="menubar">
      <ul>
          <li>@show</li>
      </ul>
   </div>
   <div class="content">
   @yield('content')
   </div>
   <div class="footer">
   @yield('footer')
   </div>
</body>
</html>