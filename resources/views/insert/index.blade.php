@extends('layouts.master_insert')
@section('title', 'FitnessMap')
 
@section('content')
<div class="text-center">
  <h3>店舗登録画面</h3>
  <p><span class="badge badge-success">入力画面</span> -> 確認画面 -> 完了画面</p>
</div>
 
<form action="{{ route('insert.confirm') }}" method="POST" class="form-horizontal">
  @csrf
  <div class="form-group col-md-6">
    <label for="name">店舗名</label>
    <input id="name" type="text" class="form-control"  name="name" placeholder="店舗名を入力してください" value="{{ old('name') }}">
    @if ($errors->has('name'))
      <p class="error-message">{{ $errors->first('name') }}</p>
    @endif
  </div>
  <div class="col-md-2">
    <label for="zip_code">郵便番号（７桁）</label>
    <input type="text" class="form-control" id="zip_code" name="zip_code" size="10" placeholder="ハイフン無し" value="{{ old('zip_code') }}" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address1','address2');"> 
    @if ($errors->has('zip_code'))
        <p class="error-message">{{ $errors->first('zip_code') }}</p>
    @endif
  </div>
  <div class="col-md-3">
    <label for="address1">都道府県</label>
    <input type="text" class="form-control" id="address1" name="address1" size="20" placeholder="都道府県を入力" value="{{ old('address1') }}">
    @if ($errors->has('address1'))
        <p class="error-message">{{ $errors->first('address1') }}</p>
    @endif
  </div>
  <div class="form-group col-md-6">
    <label for="address2">以降の住所</label>
    <input type="text" class="form-control" id="address2" name="address2" size="40" placeholder="区市町村以降を入力してください" value="{{ old('address2') }}">
    @if ($errors->has('address2'))
        <p class="error-message">{{ $errors->first('address2') }}</p>
    @endif
  </div>
  <div class="form-group col-md-10">
    <label for="summary">説明文</label>
    <textarea id="summary" name="summary" rows="8" cols="80" class="form-control" >{{ old('summary') }}</textarea>
    @if ($errors->has('summary'))
        <p class="error-message">{{ $errors->first('summary') }}</p>
    @endif
  </div>
  <div class="form-group col-md-10">
    <label for="detail">詳細説明</label>
    <textarea id="detail" name="detail" rows="8" cols="80" class="form-control" >{{ old('detail') }}</textarea>
    @if ($errors->has('detail'))
        <p class="error-message">{{ $errors->first('detail') }}</p>
    @endif
  </div>
  
  <div class="form-group">
    <div class="text-center">
      <input type="submit" value="送信" class="btn btn-primary btn-wide" />
    </div>
  </div>
</form>
@endsection
