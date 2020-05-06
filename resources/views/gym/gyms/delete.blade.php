@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3>gymsTable削除ページ</h3>
    <form action="/gyms/delete" method="post">
     <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr>
          <th>gym_content_id: </th>
          <td>{{$form->gym_content_id}}</td>
        </tr>
        <tr>
          <th>publication_status: </th>
          <td>{{$form->publication_status}}</td>
        </tr>
        <tr><th></th><td><input type="submit" value="削除"></td></tr>
     </table>
    </form>
@endsection
