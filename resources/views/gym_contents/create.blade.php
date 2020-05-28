@extends('layouts.app')

@section('content')
<div class="container">
  <h3><a href="{{ route('gym_contents.index') }}">管理者ページ</a></h3>
  <h4 class="text-secondary">GymContents新規作成ページ</h4>
  <form action="{{ route('gym_contents.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
      <label for="name">店舗名</label>
      <input id="name" type="text" class="form-control"  name="name" placeholder="店舗名を入力してください" value="{{ old('name') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="zip_code">郵便番号（ハイフンなし）</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" size="40" placeholder="1234567" value="{{ old('zip_code') }}">
    </div>
    <div class="form-group col-md-10">
      <label for="address">都道府県</label>
      {{ Form::select(
        'address',
        [null=>'都道府県']+App\Enums\Address::toSelectArray(),
        old('address'),
        ['class'=>'form-control', 'id'=>'address']
        )
      }}
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
      <label for="publication_status">非公開/公開</label>
      <select name="" class="form-control" disabled>
			<option value="">非公開</option>
		  </select>
      <p>※承認後、公開されます。</p>
    </div>
    <div class="form-group col-md-6">
      <label for="img1">施設の写真トップ</label>
      <input type="file" class="form-control-file" id="img1" name="img1" size="40" accept="image/*" >
    </div>
    <div class="form-group col-md-10">
      <div class="text-center">
        <label for="applying"><input type="checkbox" name="applying" value="applying" class="">承認申請を行う</label>
      </div>
    </div>
    <div class="form-group col-md-10">
      <div class="text-center">
        <input type="submit" name="button1" value="新規作成" class="btn btn-primary btn-block flex-fill flex-md-grow-0" formmethod="POST">
      </div>
    </div>
  </form>
  <!--郵便番号自動-->
  <script type="text/javascript" src="https://postcode-jp.com/js/postcodejp.js" charset="utf-8"></script>

  <script type="text/javascript">
    // APIキーを指定して住所補完サービスを作成
    var api = new postcodejp.address.AutoComplementService('inw05zvAEZlSAU2VSK9uaxCXn3r11qxiQqvM1iv');
    
    // 郵便番号テキストボックスを指定
    api.setZipTextbox('zip_code');
    
    // 住所補完フィールドを追加
    api.add(new postcodejp.address.StateSelectbox('address'));
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
</div>
@endsection
