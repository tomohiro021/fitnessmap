@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h1>管理者画面</h1>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('gym.control') }}">管理画面トップ</a>
      </li>
    </ul>
    <h3>usersTable更新</h3>
    <form action="/users" method="post">
     <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
          <th>name: </th>
          <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr>
        <tr>
          <th>email: </th>
          <td><input type="text" name="email" value="{{$form->email}}"></td>
        </tr>
        <tr>
          <th>gender: </th>
          <td><input type="text" name="gender" value="{{$form->gender}}"></td>
        </tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
     </table>
    </form>
@endsection
