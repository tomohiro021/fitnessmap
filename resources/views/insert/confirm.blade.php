@extends('layouts.master_insert')
@section('title', 'FitnessMap')
 
@section('content')
<div class="text-center">
  <h3>店舗登録画面</h3>
  <p>入力画面 -> <span class="badge badge-success">確認画面</span> -> 完了画面</p>
</div>
 
<form action="{{ route('insert.complete') }}" method="POST" class="form-horizontal">
  @csrf
 
  <div class="row">
    <label class="col-sm-2 control-label" for="name">店舗名</label>
    <input type="hidden" name="name" value="{{ $inputs['name'] }}">
    <div class="col-sm-10">{{ $inputs['name'] }}</div>
  </div>
  <div class="row">
    <label class="col-sm-2 control-label" for="zip_code">郵便番号</label>
    <input type="hidden" name="zip_code" value="{{ $inputs['zip_code'] }}">
    <div class="col-sm-10">{{ $inputs['zip_code'] }}</div>
  </div>
    <div class="row">
    <label class="col-sm-2 control-label" for="address1">都道府県</label>
    <input type="hidden" name="address1" value="{{ $inputs['address1'] }}">
    <div class="col-sm-2">{{ $inputs['address1'] }}</div>
  </div>
    <div class="row">
    <label class="col-sm-2 control-label" for="address2">以降の住所</label>
    <input type="hidden" name="address2" value="{{ $inputs['address2'] }}">
    <div class="col-sm-2">{{ $inputs['address2'] }}</div>
  </div>
  <div class="row">
    <label class="col-sm-2 control-label" for="summary">説明文</label>
    <input type="hidden" name="summary" value="{{ $inputs['summary'] }}">
    <div class="col-sm-2">{{ $inputs['summary'] }}</div>
  </div>
  <div class="row">
    <label class="col-sm-2 control-label" for="detail">詳細説明</label>
    <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">
    <div class="col-sm-2">{{ $inputs['detail'] }}</div>
  </div>
  <div class="row">
    <div class="col-sm-2">
      <input type="submit" value="登録" class="btn btn-primary btn-wide" />
    </div>
  </div>
</form>
@endsection
