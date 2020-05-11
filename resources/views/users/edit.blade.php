@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h3><a href="{{ route('users.index') }}">管理者ページ</a></h3>
    <h4 class="text-secondary">Users更新ページ</h4>
    <table class="table table-sm">
      <form action="/users/{{ $user->id }}" method="post">
        @method('PUT')
        @csrf
        <tr>
          <th>name: </th>
          <td><input type="text" name="name" value="{{$user->name}}"></td>
        </tr>
        <tr>
          <th>email: </th>
          <td><input type="text" name="email" value="{{$user->email}}"></td>
        </tr>
        <tr>
          <th>role: </th>
          <td><input type="text" name="role" value="{{$user->role}}"></td>
        </tr>
        <tr>
          <th>gender: </th>
          <td><input type="text" name="gender" value="{{$user->gender}}"></td>
        </tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
      </form>
      <form action="/users/{{ $user->id }}" method="post">
        @method('DELETE')
        @csrf
        <tr><th></th><td><input type="submit" value="削除"></td></tr>
      </form>
    </table>
</div>
@endsection
