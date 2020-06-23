@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('keywords.store') }}" method="post" class="form-horizontal">
        @csrf
        <div class="form-group col-md-12">
            <label for="name">キーワード</label>
            <input id="name" type="text" class="form-control" name="name" placeholder="キーワード入力する" value="{{ old('name') }}">
        </div>
        <div class="form-group col-md-12">
            <div class="text-center">
              <input type="submit" value="新規登録" class="btn btn-primary btn-block flex-fill flex-md-grow-0">
            </div>
        </div>
    </form>
</div>
@endsection
