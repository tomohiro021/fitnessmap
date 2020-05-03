@extends('layouts.master_shop')

@section('content')
<div class="row">
    <div class="col-md-12">
        <nav>
            <ul class="nav nav-tabs">
              <li class="nav-item"><a href="{{ route('shop.index') }}" class="nav-link">店舗トップ</a></li>
              <li class="nav-item"><a href="{{ route('shop.access') }}" class="nav-link">アクセス</a></li>
              <li class="nav-item"><a href="#" class="nav-link active">利用料金</a></li>
              <li class="nav-item"><a href="{{ route('shop.img') }}" class="nav-link">施設の写真</a></li>
            </ul>
        </nav>
    </div>
</div>
<h6 class="font-weight-bold text-secondary">利用料金</h6>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th>会員区分</th>
                <th>月会費(税込)</th>
                <th>利用店舗</th>
                <th>備考</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>正会員</td>
                    <td class="text-nowrap">-----------</td>
                    <td>-----------</td>
                    <td>-----------</td>
                </tr>
                <tr>
                    <td>正会員</td>
                    <td class="text-nowrap">-----------</td>
                    <td>-----------</td>
                    <td>-----------</td>
                </tr>
                <tr>
                    <td>正会員</td>
                    <td class="text-nowrap">-----------</td>
                    <td>-----------</td>
                    <td>-----------</td>
                </tr>
                <tr>
                    <td>正会員</td>
                    <td class="text-nowrap">-----------</td>
                    <td>-----------</td>
                    <td>-----------</td>
                </tr>
                <tr>
                    <td>正会員</td>
                    <td class="text-nowrap">-----------</td>
                    <td>-----------</td>
                    <td>-----------</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
