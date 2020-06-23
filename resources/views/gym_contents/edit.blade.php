@extends('layouts.app')

@section('content')
<div class="container">
  <h4 class="text-secondary">GymContents更新ページ</h4>
  <form action="/gym_contents/{{ $gym_content->id }}" method="post">
    @method('PUT')
    @csrf
    <input id="gym_id" type="hidden" name="gym_id" value="{{$gym_content->gym_id}}">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <span class="text-danger"><li>{{ $error }}</li></span>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="form-group col-md-12">
      <label for="name">店舗名</label>
      <input id="name" type="text" class="form-control"  name="name" placeholder="店舗名を入力してください" value="{{$gym_content->name}}">
    </div>
    <div class="form-group col-md-12">
      <label for="zip_code">郵便番号（ハイフンなし）</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" size="40" placeholder="1234567" value="{{$gym_content->zip_code}}">
    </div>
    <div class="form-group col-md-12">
      <label for="address">都道府県</label>
      {{ Form::select(
          'address',
          [null=>'都道府県']+App\Enums\Address::toSelectArray(),
          $gym_content->address,
          ['class'=>'form-control', 'id'=>'address']
        )
      }}
    </div>
    <div class="form-group col-md-12">
      <label for="address1">区市町村</label>
      <input type="text" class="form-control" id="address1" name="address1" size="40" placeholder="区市町村を入力してください" value="{{$gym_content->address1}}">
    </div>
    <div class="form-group col-md-12">
      <label for="address2">以降の住所</label>
      <input type="text" class="form-control" id="address2" name="address2" size="40" placeholder="以降を入力してください" value="{{$gym_content->address2}}">
    </div>
    <div class="form-group col-md-12">
      <label for="lat">緯度</label>
      <input id="lat" type="text" class="form-control"  name="lat" placeholder="" value="{{$gym_content->lat}}">
    </div>
    <div class="form-group col-md-12">
      <label for="lng">経度</label>
      <input id="lng" type="text" class="form-control"  name="lng" placeholder="" value="{{$gym_content->lng}}">
    </div>
    <div class="form-group col-md-12">
      <label for="summary">説明文</label>
      <textarea id="summary" name="summary" rows="8" cols="80" wrap="hard" class="form-control" >{{$gym_content->summary}}</textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="detail">詳細説明</label>
      <textarea id="detail" name="detail" rows="8" cols="80" wrap="hard" class="form-control" >{{$gym_content->detail}}</textarea>
    </div>
    <div class="form-group col-md-6">
      <label for="img1">施設の写真トップ</label>
      <input type="file" class="form-control-file" id="img1" name="img1" size="40" accept="image/*" >
    </div>
   <div class="form-group col-md-12">
      <label for="keywords">該当するキーワードを選択してください</label>
      <div class="form-check">
        @php
          $selectedKeywords = old('keywords[]', $gym_content->keywords()->get()->pluck('id')->toArray());
        @endphp
        
        @foreach(App\Keyword::orderBy('id')->get() as $keyword)
          <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" {{ in_array($keyword->id, $selectedKeywords) ? "checked" : ""  }} type="checkbox" name="keywords[]" value="{{ $keyword->id }}">
                {{ $keyword->name }}
              </label>
          </div>
        @endforeach
      </div>
    </div>
    <div class="form-group col-md-12">
      <div class="text-center">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="applying" value="applying">
          <span class="text-success font-weight-bold">承認申請を行う※チェックしなければ、編集中で保存されます。</span>
        </label>
      </div>
    </div>
    <div class="form-group col-md-12">
        <div class="text-center">
          <input type="submit" value="更新" class="btn btn-primary btn-block flex-fill flex-md-grow-0">
        </div>
    </div>
  </form>
  <form action="/gym_contents/{{ $gym_content->id }}" method="post">
    @method('DELETE')
    @csrf
    <div class="form-group col-md-12">
        <div class="text-center">
          <input type="submit" value="削除" class="btn btn-danger btn-block flex-fill flex-md-grow-0">
        </div>
    </div>
  </form>
</div>
@endsection
