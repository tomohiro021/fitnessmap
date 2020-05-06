@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym.control') }}">管理者ページ</a></h2>
    <h3>gymsTable更新ページ</h3>
    <form action="/gyms/edit" method="post">
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
