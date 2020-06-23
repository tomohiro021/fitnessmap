@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('keywords.store') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-check">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox1" value="マシン">
                <label class="form-check-label">マシン</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox2" value="ランニングマシン">
                <label class="form-check-label">ランニングマシン</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox3" value="自転車マシン">
                <label class="form-check-label">自転車マシン</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox4" value="スミスマシン">
                <label class="form-check-label">スミスマシン</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox5" value="フラットベンチ">
                <label class="form-check-label">フラットベンチ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox6" value="ベンチプレス台">
                <label class="form-check-label">ベンチプレス台</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox7" value="パワーラック">
                <label class="form-check-label">パワーラック</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox8" value="フリーウェイト～２０kg">
                <label class="form-check-label">フリーウェイト～２０kg</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox9" value="フリーウェイト～３０kg">
                <label class="form-check-label">フリーウェイト～３０kg</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox10" value="フリーウェイト～３０kg">
                <label class="form-check-label">フリーウェイト～３０kg</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox11" value="フリーウェイト～３０kg">
                <label class="form-check-label">フリーウェイト～３０kg</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox12" value="フリーウェイト～４０kg">
                <label class="form-check-label">フリーウェイト～４０kg</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox13" value="フリーウェイト４０kg以上">
                <label class="form-check-label">フリーウェイト４０kg以上</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox14" value="シャワー">
                <label class="form-check-label">シャワー</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox15" value="スパ・お風呂">
                <label class="form-check-label">スパ・お風呂</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox16" value="サウナ">
                <label class="form-check-label">サウナ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox17" value="ロッカー">
                <label class="form-check-label">ロッカー</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox18" value="有料個人ロッカー">
                <label class="form-check-label">有料個人ロッカー</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox19" value="駐車場">
                <label class="form-check-label">駐車場</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox20" value="プール">
                <label class="form-check-label">プール</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox21" value="スタジオ">
                <label class="form-check-label">スタジオ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox22" value="ストレッチエリア">
                <label class="form-check-label">ストレッチエリア</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox23" value="レンタルウェア">
                <label class="form-check-label">レンタルウェア</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox24" value="レンタルタオル">
                <label class="form-check-label">レンタルタオル</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox25" value="レンタルシューズ">
                <label class="form-check-label">レンタルシューズ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox26" value="２４時間">
                <label class="form-check-label">２４時間</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox27" value="駅チカ">
                <label class="form-check-label">駅チカ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox28" value="入会金無料">
                <label class="form-check-label">入会金無料</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox29" value="女性専用エリア">
                <label class="form-check-label">女性専用エリア</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox30" value="加圧トレーニング">
                <label class="form-check-label">加圧トレーニング</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox31" value="パーソナルトレーニング">
                <label class="form-check-label">パーソナルトレーニング</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="keywords[]" id="inlineCheckbox32" value="都度利用可">
                <label class="form-check-label">都度利用可</label>
            </div>
            <div class="form-group col-md-12">
              <div class="text-center">
                <input type="submit" name="button1" value="新規作成" class="btn btn-primary btn-block flex-fill flex-md-grow-0" formmethod="POST">
              </div>
            </div>
        </div>
    </form>
</div>
@endsection
