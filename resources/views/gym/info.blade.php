@extends('layouts.gym_home')

@section('header')
@foreach($gym_contents as $gym_content)
<div class="container">
    <div class="row">
        <div class="col-md-4  img-hidden">
            <a href="/images/stretching.jpg" data-lightbox="group"><img src="/images/stretching.jpg"  class="img-thumbnail float-right" width="400" height="400" alt=""></a>
        </div>
        <div class="col-md-8">
            <h2>{{ $gym_content->name }}</h2>
            <h6 class="font-weight-bold text-secondary">住所</h6>
            <p>〒{{ $gym_content->zip_code }}<br>{{ $gym_content->address }}{{ $gym_content->address1 }}{{ $gym_content->address2 }}</p>
            <h6 class="font-weight-bold text-secondary">アクセス</h6>
            <p>アクセス方法アクセス方法</p>
            <h6 class="font-weight-bold text-secondary">カテゴリ</h6>
            <p>
                タグの入力タグの入力タグの入力タグの入力タグの入力タグの入力<br>
                タグの入力タグの入力タグの入力タグの入力タグの入力タグの入力
            </p>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <h6 class="font-weight-bold text-secondary">説明文</h6>
    <div class="row">
        <div class="col-md-12">
            <p>
                {{ $gym_content->summary }}
            </p>
        </div>
    </div>
    <h6 class="font-weight-bold text-secondary">詳細説明文</h6>
    <div class="row">
        <div class="col-md-12">
            <p>
                {{ $gym_content->detail }}
            </p>
        </div>
    </div>
</div>
<div class ="container">
    <div id="BbsScript"><a href="//bp.stsd.info/">掲示板ブログパーツ</a></div>
</div>
@endforeach
@endsection

@section('script')
<script type="text/javascript" src="//bp.stsd.info/bbs/bbs.js" charset="utf-8" async></script>
@endsection
