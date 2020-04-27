@extends('layouts.master_insert')
@section('title', 'FitnessMap')
 
@section('content')
<div class="text-center">
  <h3>店舗登録画面</h3>
  <p><span class="badge badge-success">入力画面</span> -> 確認画面 -> 完了画面</p>
</div>
 
<form action="{{ route('insert.confirm') }}" method="post" class="form-horizontal">
  @csrf
  <div class="form-group　@if($errors->has('name')) has-error @endif">
    <label class="col-sm-2 control-label" for="name">店舗名</label>
    <div class="col-sm-6">
      <input id="name" type="text" class="form-control"  name="name" placeholder="店舗名を入力してください" value="{{ old('name') }}" required autocomplete="name" autofocus>
      @if($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span> @endif
    </div>
  </div>
  
  <div class="form-group col-md-2">
    <label for="zip-code">郵便番号（７桁）</label>
    <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
    <input type="text" class="form-control" id="zip-code" name="zip-code" size="10" placeholder="ハイフン無し"　maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address1','address2');"> 
  </div>
  <div class="form-group col-md-2">
    <label for="address1">都道府県</label>
    <!-- ▼住所入力フィールド(都道府県) -->
    <input type="text" class="form-control" id="address1" name="address1" size="20" placeholder="都道府県を入力">
  </div>
    
  <div class="form-group col-md-6">
    <label for="address2">以降の住所</label>
    <!-- ▼住所入力フィールド(都道府県以降の住所) -->
    <input type="text" class="form-control" id="address2" name="address2" size="40" placeholder="区市町村以降を入力してください">
  </div>
  
  <div class="form-group col-md-10">
    <label for="summary">説明文</label>
    <textarea id="summary" name="summary" rows="8" cols="80" class="form-control"></textarea>
  </div>
  <div class="form-group col-md-10">
    <label for="detail">詳細説明</label>
    <textarea id="detail" name="detail" rows="8" cols="80" class="form-control"></textarea>
  </div>
  
  <div class="form-group">
    <div class="text-center">
      <input type="submit" name="button1" value="送信" class="btn btn-primary btn-wide" />
    </div>
  </div>
</form>
@endsection
