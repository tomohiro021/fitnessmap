@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3>gym_contentsTable削除ページ</h3>
    <form action="/gym_contents/delete" method="post">
     <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
          <th>gym_id: </th>
          <td>{{$form->gym_id}}</td>
        </tr>
        <tr>
          <th>user_id: </th>
          <td>{{$form->user_id}}</td>
        </tr>
        <tr>
          <th>name: </th>
          <td>{{$form->name}}</td>
        </tr>
        <tr>
          <th>zip_code: </th>
          <td>{{$form->zip_code}}</td>
        </tr>
        <tr>
          <th>address: </th>
          <td>{{$form->address}}</td>
        </tr>
        <tr>
          <th>address1: </th>
          <td>{{$form->address1}}</td>
        </tr>
        <tr>
          <th>address2: </th>
          <td{{$form->address2}}</td>
        </tr>
        <tr>
          <th>lat: </th>
          <td>{{$form->lat}}</td>
        </tr>
        <tr>
          <th>lng: </th>
          <td>{{$form->lng}}</td>
        </tr>
        <tr>
          <th>summary: </th>
          <td>{{$form->summary}}</td>
          <!--<input type="text" name="summary" value="{{$form->summary}}">-->
        </tr>
        <tr>
          <th>detail: </th>
          <td>{{$form->detail}}</td>
          <!--<input type="text" name="detail" value="{{$form->detail}}">-->
        </tr>
        <tr>
          <th>status: </th>
          <td>{{$form->status}}</td>
        </tr>
        <tr><th></th><td><input type="submit" value="削除"></td></tr>
     </table>
    </form>
@endsection
