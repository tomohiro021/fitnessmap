@extends('layouts.gym_home')

@section('content')
<div class="container">
<h2><a href="{{ route('gym_contents.index') }}">管理者ページ</a></h2>
    <h3>GymContents更新ページ</h3>
    <table class="table table-sm">
      <form action="/gym_contents/{{ $gym_content->id }}" method="post">
        @method('PUT')
        @csrf
        <tr>
          <th>gym_id: </th>
          <td><input type="text" name="gym_id" value="{{$gym_content->gym_id}}"></td>
        </tr>
        <tr>
          <th>user_id: </th>
          <td><input type="text" name="user_id" value="{{$gym_content->user_id}}"></td>
        </tr>
        <tr>
          <th>name: </th>
          <td><input type="text" name="name" value="{{$gym_content->name}}"></td>
        </tr>
        <tr>
          <th>zip_code: </th>
          <td><input type="text" name="zip_code" value="{{$gym_content->zip_code}}"></td>
        </tr>
        <tr>
          <th>address: </th>
          <td><input type="text" name="address" value="{{$gym_content->address}}"></td>
        </tr>
        <tr>
          <th>address1: </th>
          <td><input type="text" name="address1" value="{{$gym_content->address1}}"></td>
        </tr>
        <tr>
          <th>address2: </th>
          <td><input type="text" name="address2" value="{{$gym_content->address2}}"></td>
        </tr>
        <tr>
          <th>lat: </th>
          <td><input type="text" name="lat" value="{{$gym_content->lat}}"></td>
        </tr>
        <tr>
          <th>lng: </th>
          <td><input type="text" name="lng" value="{{$gym_content->lng}}"></td>
        </tr>
        <tr>
          <th>summary: </th>
          <td><input type="text" name="summary" value="{{$gym_content->summary}}"></td>
        </tr>
        <tr>
          <th>detail: </th>
          <td><input type="text" name="detail" value="{{$gym_content->detail}}"></td>
        </tr>
        <tr>
          <th>status: </th>
          <td><input type="text" name="status" value="{{$gym_content->status}}"></td>
        </tr>
        <tr><th></th><td><input type="submit" value="更新"></td></tr>
      </form>
      <form action="/gym_contents/{{ $gym_content->id }}" method="post">
        @method('DELETE')
        @csrf
        <tr><th></th><td><input type="submit" value="削除"></td></tr>
      </form>
    </table>
</div>
@endsection
