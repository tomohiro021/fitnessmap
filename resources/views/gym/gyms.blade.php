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
    <form action="/gyms" method="post">
     <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
          <th>gym_content_id: </th>
          <td><input type="text" name="gym_content_id" value="{{$form->gym_content_id}}"></td>
        </tr>
        <tr>
          <th>publication_status: </th>
          <td><input type="text" name="publication_status" value="{{$form->publication_status}}"></td>
        </tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
     </table>
    </form>
@endsection
