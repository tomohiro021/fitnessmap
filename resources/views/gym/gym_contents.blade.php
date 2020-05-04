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
    <form action="/gym_contents" method="post">
     <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
          <th>gym_id: </th>
          <td><input type="text" name="gym_id" value="{{$form->gym_id}}"></td>
        </tr>
        <tr>
          <th>user_id: </th>
          <td><input type="text" name="user_id" value="{{$form->user_id}}"></td>
        </tr>
        <tr>
          <th>name: </th>
          <td><input type="text" name="name" value="{{$form->name}}"></td>
        </tr>
        <tr>
          <th>zip_code: </th>
          <td><input type="text" name="zip_code" value="{{$form->zip_code}}"></td>
        </tr>
        <tr>
          <th>address: </th>
          <td><input type="text" name="address" value="{{$form->address}}"></td>
        </tr>
        <tr>
          <th>address1: </th>
          <td><input type="text" name="address1" value="{{$form->address1}}"></td>
        </tr>
        <tr>
          <th>address2: </th>
          <td><input type="text" name="address2" value="{{$form->address2}}"></td>
        </tr>
        <tr>
          <th>lat: </th>
          <td><input type="text" name="lat" value="{{$form->lat}}"></td>
        </tr>
        <tr>
          <th>lng: </th>
          <td><input type="text" name="lng" value="{{$form->lng}}"></td>
        </tr>
        <tr>
          <th>summary: </th>
          <td><input type="text" name="summary" value="{{$form->summary}}"></td>
        </tr>
        <tr>
          <th>detail: </th>
          <td><input type="text" name="detail" value="{{$form->detail}}"></td>
        </tr>
        <tr>
          <th>status: </th>
          <td><input type="text" name="status" value="{{$form->status}}"></td>
        </tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
     </table>
    </form>
@endsection
