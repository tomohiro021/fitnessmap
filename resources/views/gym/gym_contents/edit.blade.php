@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3>gym_contentsTable更新ページ</h3>
    <form action="/gym_contents/edit" method="post">
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
          <td><textarea id="summary" name="summary" rows="8" cols="80" class="form-control" >{{$form->summary}}</textarea></td>
          <!--<input type="text" name="summary" value="{{$form->summary}}">-->
        </tr>
        <tr>
          <th>detail: </th>
          <td><textarea id="detail" name="detail" rows="8" cols="80" class="form-control" >{{$form->detail}}</textarea></td>
          <!--<input type="text" name="detail" value="{{$form->detail}}">-->
        </tr>
        <tr>
          <th>status: </th>
          <td><input type="text" name="status" value="{{$form->status}}"></td>
        </tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
     </table>
    </form>
@endsection
