@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('keywords.update',$keyword->id) }}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf
        <div class="form-group col-md-12">
            <label for="name">キーワード</label>
            <input id="name" type="text" class="form-control" name="name" placeholder="キーワード入力する" value="{{ old('name', $keyword->name) }}">
        </div>
        <div class="form-group col-md-12">
            <div class="text-center">
              <input type="submit" value="更新" class="btn btn-primary btn-block flex-fill flex-md-grow-0">
            </div>
        </div>
    </form>
    <form action="{{ route('keywords.destroy',$keyword->id) }}" method="post">
        @method('DELETE')
        @csrf
        <div class="form-group col-md-12">
            <div class="text-center">
              <input type="submit" onclick="return confirm('本当に削除してもよろしいですか？');" value="削除" class="btn btn-danger btn-block flex-fill flex-md-grow-0">
            </div>
        </div>
    </form>
</div>
@endsection
