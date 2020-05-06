@extends('layouts.gym_home')

@section('head')
<style>
#map {
  height: 100%;
}
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>
@endsection

@section('content')
<div class="container">
  <div class="text-center">
    <h2>店舗登録画面</h2>
    <p><strong>入力画面</strong> -> 確認画面 -> 完了画面</p>
  </div>
  <form action="{{ route('gym.complete') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
      <label for="gym_id">GymID</label>
      <input id="gym_id" type="text" class="form-control"  name="gym_id" placeholder="GymIDを入力してください" value="{{ old('gym_id') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="user_id">UserID</label>
      <input id="user_id" type="text" class="form-control"  name="user_id" placeholder="UserIDを入力してください" value="{{ old('user_id') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="name">店舗名</label>
      <input id="name" type="text" class="form-control"  name="name" placeholder="店舗名を入力してください" value="{{ old('name') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="zip_code">郵便番号（ハイフンなし）</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" size="40" placeholder="1234567" value="{{ old('zip_code') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="address">都道府県</label>
      <input type="text" class="form-control" id="address" name="address" size="40" placeholder="都道府県を入力してください" value="{{ old('address') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="address1">区市町村</label>
      <input type="text" class="form-control" id="address1" name="address1" size="40" placeholder="区市町村を入力してください" value="{{ old('address1') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="address2">以降の住所</label>
      <input type="text" class="form-control" id="address2" name="address2" size="40" placeholder="以降を入力してください" value="{{ old('address2') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="lat">緯度</label>
      <input id="lat" type="text" class="form-control"  name="lat" placeholder="" value="{{ old('lat') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="lng">経度</label>
      <input id="lng" type="text" class="form-control"  name="lng" placeholder="" value="{{ old('lng') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="summary">説明文</label>
      <textarea id="summary" name="summary" rows="8" cols="80" class="form-control" >{{ old('summary') }}</textarea>
    </div>
    <div class="form-group col-md-10">
      <label for="detail">詳細説明</label>
      <textarea id="detail" name="detail" rows="8" cols="80" class="form-control" >{{ old('detail') }}</textarea>
    </div>
    <div class="form-group col-md-10">
      <label for="status">公開/非公開</label>
      <!--<input id="status" type="text" class="form-control"  name="status" placeholder="店舗名を入力してください" value="{{ old('status') }}">-->
      {{ Form::select(
          'status',
          App\Enums\Status::toSelectArray(), '', ['disabled' => 'disabled']
        )
      }}
      <span class="font-weight-bold"><p>※承認後、公開されます</p></span>
    </div>
    <div class="form-group col-md-6">
      <label for="img1">施設の写真トップ</label>
      <input type="file" class="form-control-file" id="img1" name="img1" size="40" accept="image/*" ><!--multiple-->
    </div>
    <div class="form-group">
      <div class="text-center">
        <input type="submit" name="button1" value="送信" class="btn btn-primary flex-fill flex-md-grow-0" formmethod="POST">
      </div>
    </div>
  </form>
  <div id="map"></div>
  <!--郵便番号自動-->
  <script type="text/javascript" src="https://postcode-jp.com/js/postcodejp.js" charset="utf-8"></script>

  <script type="text/javascript">
    // GoogleMap設定
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
      });
    }
    // APIキーを指定して住所補完サービスを作成
    var api = new postcodejp.address.AutoComplementService('inw05zvAEZlSAU2VSK9uaxCXn3r11qxiQqvM1iv');
    
    // 郵便番号テキストボックスを指定
    api.setZipTextbox('zip_code');
    
    // 住所補完フィールドを追加
    api.add(new postcodejp.address.StateTextbox('address'));
    api.add(new postcodejp.address.TownTextbox('address1'));
    api.add(new postcodejp.address.StreetTextbox('address2'));
    
    
    api.setAdditionalCallback(function(data) {
      mdlCleanUp();
    });
    // 郵便番号テキストボックスの監視を開始
    api.observe();
    
    
    function mdlCleanUp() {
      var mdlInputs = document.querySelectorAll('.mdl-js-textfield');
      for (var i = 0, l = mdlInputs.length; i < l; i++) {
        mdlInputs[i].MaterialTextfield.checkDirty();
      }
    }
  </script>
  <!--GoogleMap_API-->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg-EtqnaKXMIF6RI5hZCmn_4PiJWAcfSc"
    async defer></script>
</div>
@endsection
