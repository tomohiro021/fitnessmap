@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gym_contents.index') }}">管理者ページ</a></h2>
    <h3>GymContents詳細ページ</h3>
    <table class="table table-sm">
      <tr>
        <th>id: </th>
        <td>{{$gym_content->id}}</td>
      </tr>
      <tr>
        <th>gym_id: </th>
        <td>{{$gym_content->gym_id}}</td>
      </tr>
      <tr>
        <th>user_id: </th>
        <td>{{$gym_content->user_id}}</td>
      </tr>
      <tr>
        <th>name: </th>
        <td>{{$gym_content->name}}</td>
      </tr>
      <tr>
        <th>zip_code: </th>
        <td>{{$gym_content->zip_code}}</td>
      </tr>
      <tr>
        <th>address: </th>
        <td>{{$gym_content->address}}</td>
      </tr>
      <tr>
        <th>address1: </th>
        <td>{{$gym_content->address1}}</td>
      </tr>
      <tr>
        <th>address2: </th>
        <td>{{$gym_content->address2}}</td>
      </tr>
      <tr>
        <th>lat: </th>
        <td>{{$gym_content->lat}}</td>
      </tr>
      <tr>
        <th>lng: </th>
        <td>{{$gym_content->lng}}</td>
      </tr>
      <tr>
        <th>summary: </th>
        <td>{{$gym_content->summary}}</td>
      </tr>
      <tr>
        <th>detail: </th>
        <td>{{$gym_content->detail}}</td>
      </tr>
      <tr>
        <th>status: </th>
        <td>{{$gym_content->status}}</td>
      </tr>
      <tr>
        <th></th>
        <td><a href="/gym_contents/{{$gym_content->id}}/edit">編集</a></td>
      </tr>
    </table>
</div>
@endsection
