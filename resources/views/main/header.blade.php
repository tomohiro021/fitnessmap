<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="{{ route('main.index') }}">FitnessMap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('main.index') }}">ホーム <span class="sr-only">(現位置)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('shop.index') }}">店舗紹介</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('insert.index') }}">店舗登録</a>
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
    </div>
  </nav>
</header>
  