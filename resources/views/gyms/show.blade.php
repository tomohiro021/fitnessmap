@extends('layouts.gym_home')

@section('content')
<div class="container">
    <h3><a href="{{ route('gyms.index') }}">管理者ページ</a></h3>
    <h4 class="text-secondary">Gyms詳細ページ</h4>
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
