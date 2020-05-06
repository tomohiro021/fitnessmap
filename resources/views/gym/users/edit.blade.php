@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3>usersTable更新ページ</h3>
    <form action="/users/edit" method="post">
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
