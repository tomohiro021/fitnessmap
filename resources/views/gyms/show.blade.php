@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h2><a href="{{ route('gyms.index') }}">管理者ページ</a></h2>
    <h3>Gyms詳細ページ</h3>
    <table class="table table-sm">
       <tr>
         <th>gym_content_id: </th>
         <td>{{$gym->gym_content_id}}</td>
       </tr>
       <tr>
         <th>publication_status: </th>
         <td>{{$gym->publication_status}}</td>
       </tr>
       <tr>
         <th></th>
         <td><a href="/gyms/{{$gym->id}}/edit">編集</a></td>
       </tr>
    </table>
</div>
@endsection
