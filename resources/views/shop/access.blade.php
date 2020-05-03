@extends('layouts.master_shop')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a href="{{ route('shop.index') }}" class="nav-link">店舗トップ</a></li>
              <li class="nav-item"><a href="#" class="nav-link active">アクセス</a></li>
              <li class="nav-item"><a href="{{ route('shop.price') }}" class="nav-link">利用料金</a></li>
              <li class="nav-item"><a href="{{ route('shop.img') }}" class="nav-link">施設の写真</a></li>
            </ul>
        </nav>
    </div>
</div>
<h6 class="font-weight-bold text-secondary">住所</h6>
<div class="row">
    <div class="col-md-12">
        <p>住所を挿入する住所を挿入する住所を挿入する</p>
        <table class="table">
            <tbody>
              <tr><td>アクセス</td><td class="text-nowrap">API GoogleMap挿入予定</td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
