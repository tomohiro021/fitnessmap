@extends('layouts.master_insert')
@section('title', 'FitnessMap')
 
@section('content')
<div class="text-center">
  <h2>店舗登録画面</h2>
  <p>入力画面 -> <strong>確認画面</strong> -> 完了画面</p>
</div>
 
<form action="{{ route('insert.complete') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label class="col-md-2 control-label" for="lat">緯度</label>
    <input type="hidden" name="lat" value="{{ $inputs['lat'] }}">
    <div class="col-md-10">{{ $inputs['lat'] }}</div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label" for="name">経度</label>
    <input type="hidden" name="lng" value="{{ $inputs['lng'] }}">
    <div class="col-md-10">{{ $inputs['lng'] }}</div>
  </div>
  
  <div class="form-group">
    <label class="col-md-2 control-label" for="name">店舗名</label>
    <input type="hidden" name="name" value="{{ $inputs['name'] }}">
    <span class="text-primary"><div class="col-md-10">{{ $inputs['name'] }}</div></span>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label" for="zip_code">郵便番号</label>
    <input type="hidden" name="zip_code" value="{{ $inputs['zip_code'] }}">
    <span class="text-primary"><div class="col-md-10">{{ $inputs['zip_code'] }}</div></span>
  </div>
    <div class="form-group">
    <label class="col-md-2 control-label" for="address1">都道府県</label>
    <input type="hidden" name="address1" value="{{ $inputs['address1'] }}">
    <span class="text-primary"><div class="col-md-10">{{ $inputs['address1'] }}</div></span>
  </div>
    <div class="form-group">
    <label class="col-md-2 control-label" for="address2">以降の住所</label>
    <input type="hidden" name="address2" value="{{ $inputs['address2'] }}">
    <span class="text-primary"><div class="col-md-10">{{ $inputs['address2'] }}</div></span>
  </div>
    <div class="form-group">
    <label class="col-md-2 control-label" for="img">施設の写真トップ画</label>
    <input type="hidden" name="img1" value="$_FILES['img1'] ['name']">
    <input type="hidden" name="img2" value="$_FILES['img2'] ['name']">
    <input type="hidden" name="img3" value="$_FILES['img3'] ['name']">
    <span class="text-primary"><div class="col-md-10">{{ $_FILES['img1'] ['name'] }}</div></span>
    <span class="text-primary"><div class="col-md-10">{{ $_FILES['img2'] ['name'] }}</div></span>
    <span class="text-primary"><div class="col-md-10">{{ $_FILES['img3'] ['name'] }}</div></span>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label" for="summary">説明文</label>
    <input type="hidden" name="summary" value="{{ $inputs['summary'] }}">
    <span class="text-primary"><div class="col-md-10">{{ $inputs['summary'] }}</div></span>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label" for="detail">詳細説明</label>
    <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">
    <span class="text-primary"><div class="col-md-10">{{ $inputs['detail'] }}</div></span>
  </div>
  <div class="form-group">
    <div class="col-md-2">
      <input type="submit" value="登録する" class="btn btn-primary flex-fill flex-md-grow-0" formmethod="POST">
    </div>
  </div>
</form>
@endsection
