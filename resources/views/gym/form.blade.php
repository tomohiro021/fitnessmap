@extends('layouts.gym_home')
 
@section('content')
<div class="container">
  <div class="text-center">
    <h2>店舗登録画面</h2>
    <p><strong>入力画面</strong> -> 確認画面 -> 完了画面</p>
  </div>
  <form action="{{ route('form.complete') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
  	    <div class="alert alert-danger">
  	        <ul>
  	            @foreach ($errors->all() as $error)
  	                <span class="text-danger"><li>{{ $error }}</li></span>
  	            @endforeach
  	        </ul>
  	    </div>
  	@endif
    <div class="form-group col-md-10">
      <label for="lat">緯度</label>
      <input id="lat" type="text" class="form-control"  name="lat" placeholder="店舗名を入力してください" value="{{ old('lat') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="lng">経度</label>
      <input id="lng" type="text" class="form-control"  name="lng" placeholder="店舗名を入力してください" value="{{ old('lng') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="name">店舗名</label>
      <input id="name" type="text" class="form-control"  name="name" placeholder="店舗名を入力してください" value="{{ old('name') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="zip_code">郵便番号（ハイフンなし）</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" size="40" placeholder="1234567" value="{{ old('zip_code') }}" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address1','address2');"> 
    </div>
    <div class="form-group col-md-10">
      <label for="address1">都道府県</label>
      <input type="text" class="form-control" id="address1" name="address1" size="40" placeholder="自動入力" value="{{ old('address1') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="address2">以降の住所</label>
      <input type="text" class="form-control" id="address2" name="address2" size="40" placeholder="区市町村以降を入力してください" value="{{ old('address2') }}">
    </div>
    <div class="form-group col-md-6">
      <label for="img">施設の写真トップ画</label>
      <input type="file" class="form-control-file" id="img1" name="img1" size="40" accept="image/*" ><!--multiple-->
    </div>
    <div class="form-group col-md-10">
      <label for="summary">説明文</label>
      <textarea id="summary" name="summary" rows="8" cols="80" class="form-control" >{{ old('summary') }}</textarea>
    </div>
    <div class="form-group col-md-10">
      <label for="detail">詳細説明</label>
      <textarea id="detail" name="detail" rows="8" cols="80" class="form-control" >{{ old('detail') }}</textarea>
    </div>
    <div class="form-group">
      <div class="text-center">
        <input type="submit" name="button1" value="送信" class="btn btn-primary flex-fill flex-md-grow-0" formmethod="POST">
      </div>
    </div>
  </form>
</div>
@endsection
