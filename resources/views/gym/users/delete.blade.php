@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3>usersTable削除ページ</h3>
    <form action="/users/delete" method="post">
     <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
          <th>name: </th>
          <td>{{$form->name}}</td>
        </tr>
        <tr>
          <th>email: </th>
          <td>{{$form->email}}</td>
        </tr>
        <tr>
          <th>gender: </th>
          <td>{{$form->gender}}</td>
        </tr>
        <tr><th></th><td><input type="submit" value="削除"></td></tr>
     </table>
    </form>
@endsection
