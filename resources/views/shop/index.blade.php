@extends('layouts.master_shop')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a href="#" class="nav-link active">店舗トップ</a></li>
              <li class="nav-item"><a href="{{ route('shop.access') }}" class="nav-link">アクセス</a></li>
              <li class="nav-item"><a href="{{ route('shop.price') }}" class="nav-link">利用料金</a></li>
              <li class="nav-item"><a href="{{ route('shop.img') }}" class="nav-link">施設の写真</a></li>
            </ul>
        </nav>
    </div>
</div>
<h6 class="font-weight-bold text-secondary">施設の特徴</h6>
<div class="row">
    <div class="col-md-12">
        <p>
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
            紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります紹介文が入ります
        </p>
    </div>
</div>
<h6 class="font-weight-bold text-secondary">施設の情報</h6>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <tbody>
              <tr><td>アクセス</td><td class="text-nowrap">API GoogleMap挿入予定</td></tr>
              <tr><td>営業時間</td><td>48時間のスタンダードコースです。48時間のスタンダードコースです。</td></tr>
              <tr><td>施設</td><td>施設のカテゴリ挿入</td></tr>
              <tr><td>電話番号</td><td>施設の電話番号（リンク押せば電話かけれる）</td></tr>
              <tr><td>ホームページ</td><td><a href="#">https://www.fitness.com/</a></td></tr>
            </tbody>
        </table>
    </div>
</div>
<h6 class="font-weight-bold text-secondary">施設の写真</h6>
<div class="row">
    <div class="col-md-4  img-hidden">
        <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail" width="400" height="400" alt=""></a>
    </div>
    <div class="col-md-4  img-hidden">
        <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail" width="400" height="400" alt=""></a>
    </div>
    <div class="col-md-4  img-hidden">
        <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail" width="400" height="400" alt=""></a>
    </div>
    <div class="col-md-4  img-hidden">
        <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail" width="400" height="400" alt=""></a>
    </div>
    <div class="col-md-4  img-hidden">
        <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail" width="400" height="400" alt=""></a>
    </div>
    <div class="col-md-4  img-hidden">
        <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail" width="400" height="400" alt=""></a>
    </div>
</div>
@endsection
