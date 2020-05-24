@extends('layouts.app')

@section('content')
<div class="container">
    <h3><a href="{{ route('users.index') }}">管理者ページ</a></h3>
    <h4 class="text-secondary">Users詳細ページ</h4>
    <table class="table table-sm">
      <tr>
        <th>name: </th>
        <td>{{$user->name}}</td>
      </tr>
      <tr>
        <th>email: </th>
        <td>{{$user->email}}</td>
      </tr>
      <tr>
        <th>role: </th>
        <td>{{$user->role}}</td>
      </tr>
      <tr>
        <th>gender: </th>
        <td>{{$user->gender->description}}</td>
      </tr>
      <tr>
        <th></th>
        <td><a href="/users/{{$user->id}}/edit">編集</a></td>
      </tr>
    </table>
</div>
@endsection
