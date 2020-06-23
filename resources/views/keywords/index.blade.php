@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="#">管理者ページ</a></h3>
    <h4 class="text-secondary">Keywords</h4>
    <div class="form-group col-md-10">
        <a href = "{{ route('keywords.create') }}">新規作成</a>
    </div>
    <table class="table table-sm">
        @foreach ($keywords as $keyword)
        <tr>
            <th>id</th><th>keyword</th>
        </tr>
        <tr>
            <td><a href = "{{ route('keywords.edit', $keyword->id) }}">{{$keyword->id}}</a></td>
            <td>{{$keyword->name}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
